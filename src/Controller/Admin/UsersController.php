<?php
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

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Static content controller
 *
 * This controller will render views from Template/Adds/
 *
 */
class UsersController extends AppController
{
	public $paginate = [
        'limit' => 20
    ];
	public function initialize()
    {
        // loads backend template to all methods
		$this->viewBuilder()->layout('backend');    }
	
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
            $this->redirect(['controller'=>'/users','action'=>'list']);
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
    	$user = $this->Users->get($id);
    	$user->status ="Bloqueado";
    	$this->Users->save($user);
    	$this->redirect(['controller'=>'/users','action'=>'listall']);
    }

    //Função que irá desbloquear o utilizador na base de dados
    public function ativar($id)
    {
    	$user = $this->Users->get($id);
    	$user->status ="Ativado";
    	$this->Users->save($user);
    	$this->redirect(['controller'=>'/users','action'=>'listall']);
    }
  
}