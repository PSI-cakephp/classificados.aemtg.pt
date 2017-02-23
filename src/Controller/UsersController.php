<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
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
}