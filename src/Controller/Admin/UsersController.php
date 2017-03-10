<?php
namespace App\Controller\Admin;

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

  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['logout']);
  }

  public function index()
  {     
     $this->viewBuilder()->layout('backend');    
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
}