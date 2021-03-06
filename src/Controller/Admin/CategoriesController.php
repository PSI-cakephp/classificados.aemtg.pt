<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\I18n\I18n;
use Cake\ORM\TableRegistry;
use Cake\Utility\Hash;

class CategoriesController extends AppController
{

    public $paginate = [
        'limit' => 20
    ];

    public function initialize()
    {
        // loads backend template to all methods
		$this->viewBuilder()->layout('backend');
        $this->loadComponent('RequestHandler');
    }

    public function index(){
        $category = $this->Categories->find('all');
        $this->set('category',$this->paginate($category));
        //$categories = $this->Categories->getSectionTree();
        $categories = $this->Categories->getSectionTree();
        $this->set('categorylist',$categories);
        $this->set('list',$categories);   //encontra e define as categorias
    }

    public function add(){
        $this->set('categories',$this->Categories->find('list'));   //encontra e define as categorias na opçao parent

        if($this->request->is('post')){   //espera por um pedido post

            //--------------------------------------------------------------------------------------
            //Handling do icon

            $icon = $this->request->data('icon'); //recebe o valor do campo de upload
            if($icon['name'] != ''){
                $extension = pathinfo($icon['name'], PATHINFO_EXTENSION); //obtem a extensao do ficheiro
                $icon['name'] = Text::uuid($icon['name']).'.'.$extension; //transforma o nome em uma string

                move_uploaded_file($icon['tmp_name'], WWW_ROOT . 'img/categories_icon/' . $icon['name']);   //move o ficheiro para a pasta local
            }


            //---------------------------------------------------------------------------------------

            $category = $this->Categories->newEntity($this->request->data());   //cria uma nova entidade
            if($icon['name'] != ''){
                $category->icon = 'categories_icon/' . $icon['name']; //guarda o nome e caminho do ficheiro na patch entity
            }
            else{
                $category->icon = null;
            }

            if($this->Categories->save($category)){ //valida os dados
                //$this->Flash->success('Sucesso');
                //faz qualquer coisa
            }
            else{
                $this->Flash->error('Nao foi possivel guardar'); //envia uma mensagem de erro
            }
        }
    }
    public function edit($id)
    {
    	$category = $this->Categories->get($id);
        if($this->request->is('post'))
        {
            $icon = $this->request->data('icon'); //recebe o valor do campo de upload
            if($icon['name'] != ''){
                $extension = pathinfo($icon['name'], PATHINFO_EXTENSION); //obtem a extensao do ficheiro
                $icon['name'] = Text::uuid($icon['name']).'.'.$extension; //transforma o nome em uma string

                move_uploaded_file($icon['tmp_name'], WWW_ROOT . 'img/categories_icon/' . $icon['name']);   //move o ficheiro para a pasta local
            }
            else{
                unset($this->request->data['icon']);
            }

            $entidade = $this->Categories->patchEntity($category,$this->request->data());
            if($icon['name'] != ''){
                $category->icon = 'categories_icon/' . $icon['name']; //guarda o nome e caminho do ficheiro na patch entity
            }
            die(debug($entidade));
            $this->Categories->save($entidade);
            $this->redirect(['controller'=>'/categories/']);
        }
        $this->set('category',$category);
    }

    public function getcategory(){
        //$this->autoRender = false;
        $id = json_decode($this->request->data('id'));
        $category = $this->Categories->find('all')->where('id = '.$id);
        $categories = $this->Categories->find('all')->select(['id', 'name']);
        $category = $category->toArray();
        $categories = $categories->toArray();
        $category['categories'] = $categories;
        //die(debug($category));
        $category = json_encode($category);

        $this->set('categoria',$category);
    }

}
