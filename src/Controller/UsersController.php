<?php
namespace App\Controller;

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
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('Register');
    }

	public function Register()
	{
        $user = $this->Users->newEntity();
    	if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data(),['validate' => 'Users']);
            if($this->Users->save($user)){
            	$this->Flash->success(__('User Saved'));
            }   
            else{
                $this->Flash->error(__('ERROR: User NOT Saved'));  
            }       
    	}
        $this->set('user',$user);

    }

    public function Login()
    {
        $this->viewBuilder()->layout('login');   
        if ($this->request->is('post')) {
            $query=$this->Users->findAllByUsernameOrEmail($this->request->data['username'],$this->request->data['username']);
            
            if ($user = $query->first()){
                if ($user->status == 'Ativado'){
                    $hasher = new DefaultPasswordHasher();
                    $password = $hasher->check($this->request->data['password'], $user->password);
                
                    if ($password) {
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
                        
                        if ($user) {
                            $this->Auth->setUser($user);
                            return $this->redirect($this->Auth->redirectUrl());
                        }

                        $this->Flash->error(__('Invalid username or password, try again'));
                    }
                }
            }
            $this->Flash->error(__('Invalid username or password, try again'));

        }
    }
}