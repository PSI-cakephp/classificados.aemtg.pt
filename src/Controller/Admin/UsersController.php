<?php
namespace App\Controller\Admin;
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Validation\Validation;
use Cake\Auth\DefaultPasswordHasher;


class UsersController extends AppController
{    

  public $components = array('Auth');
  
  public $paginate = [
    'limit' => 20
   ];
  
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['logout']);
  }
  
	public function initialize()
  {
        // loads backend template to all methods
		$this->viewBuilder()->layout('backend'); 
    $this->loadComponent('RequestHandler');   
  }
	
	public function listall()
  {
    $query = $this->Users->find('all');
    $this->set('users',$this->paginate($query));
  }

  //Função que irá inserir o utilizador editado na base de dados
  public function edit($id)
  {

    $user = $this->Users->get($id);
    if($this->request->is('put'))
    {
      $entidade = $this->Users->patchEntity($user,$this->request->data());
      $this->Users->save($entidade);
      $this->redirect(['controller'=>'/users','action'=>'listall']);
    }
      $this->set('user',$user);
  }


  //Função que elimina o utilizador selecionado pelo ID
  public function delete($id)
  {
    $user = $this->Users->get($id);
    $this->Users->delete($user,$this->request->data());
    $this->redirect(['controller'=>'/users','action'=>'listall']);
  }

  //Função que irá bloquear o utilizador na base de dados
  public function bloquear($id)
  {
    $this->autoRender = false;
  	$user = $this->Users->get($id);
  	$user->status ="Bloqueado";
   	$this->Users->save($user);
   	$this->redirect(['controller'=>'/users','action'=>'listall']);   
  }

  //Função que irá desbloquear o utilizador na base de dados
  public function ativar($id)
  {
    $this->autoRender = false;
    $user = $this->Users->get($id);
    $user->status ="Ativado";
    $this->Users->save($user);
   	$this->redirect(['controller'=>'/users','action'=>'listall']);
  }
  
  //vai confirmar o email à base de dados e a password e se estiverem corretos da acesso à zona de administração
  public function login()
  {
    $this->viewBuilder()->layout('');  
    if ($this->request->is('post')) {
      if (Validation::email($this->request->data['username'])) {
        $this->Auth->config('authenticate', [
            'Form' => [
                'fields' => ['username' => 'email']
            ]
        ]);
        $this->Auth->constructAuthenticate();
        $this->request->data['email'] = $this->request->data['username'];
        unset($this->request->data['username']);
      }
     
      $user = $this->Auth->identify();
      if ($user['user_type']=='admin') {
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl(['controller'=>'/users','action'=>'index']));
      }          
    }
  }

  // 
  public function logout()
  {
    return $this->redirect($this->Auth->logout());
  }

  public function getuser(){
        //$this->autoRender = false;
        $id = json_decode($this->request->data('id'));
        $user = $this->Users->find('all')->where('id = '.$id);
        $user = json_encode($user);
        $this->set('user',$user);
    }
}