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
class AddsController extends AppController
{
	public function initialize()
    {
        // loads backend template to all methods
		$this->viewBuilder()->layout('backend');    }
	
	public function index() 
  	{

    }
    public function troca()
    {
  		$query = $this->Adds->find('all',['order' => ['Adds.created' => 'DESC']] )->where(['type'=> 'Troca']);

 

        $this->set('trocas',$this->paginate($query));
    }


  public function venda()
  {
  	$query = $this->Adds->find('all',['order' => ['Adds.created' => 'DESC']] )->where(['type'=> 'Venda']);
        $this->set('vendas',$this->paginate($query));
  }
  public function procura()
  {
    $query = $this->Adds->find('all',['order' => ['Adds.created' => 'DESC']] )->where(['type'=> 'Compra']);
        $this->set('compras',$this->paginate($query));
  	
  }
}
