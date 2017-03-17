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
use Cake\Utility\Text;
use Cake\I18n\I18n;


class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('Register');
        $user = $this->Auth->user('id');

    }


	public function Register()
	{
        $user = $this->Users->newEntity();
    	if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data(),['validate' => 'Users']);
            if($this->Users->save($user)){
                $this->redirect(['controller'=>'users','action' => 'login']);
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

        public function account()
    {
        $this->viewBuilder()->layout('account'); 
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id);
        unset($user->password);
        if (empty($user->profile_picture)) {

            unset($user->profile_picture);
            unset($this->request->data['profile_picture']);
        }  
        //die(debug($user));
        if ($this->request->is('put')){
            if (empty($this->request->data('password'))) {
                
                unset($this->request->data['password']);
                //die(debug($this->request->data()));
            }
            if (empty($this->request->data('profile_picture'))) {
                
                unset($this->request->data['profile_picture']);
                //die(debug($this->request->data()));
            }
            else{
                $image = $this->request->data('profile_picture');
                //die(debug($image));
                $extension = pathinfo($image['name'], PATHINFO_EXTENSION); //obtem a extensao do ficheiro
                $image['name'] = Text::uuid($image['name']).'.'.$extension; //transforma o nome em uma string
                //die(debug($image['name']));
                move_uploaded_file($image['tmp_name'], WWW_ROOT . 'img/users_pic/' . $image['name']);

                $entidade = $this->Users->patchEntity($user,$this->request->data());

                $entidade->profile_picture = 'users_pic/' . $image['name']; //guarda o nome e caminho do ficheiro na patch entity
                //die(debug($entidade));
                $this->Users->save($entidade);
            }
//die(debug($user));




            //$this->redirect(['controller'=>'products','action' => 'Vender']);
        }
        $this->set('user',$user);
    }
}