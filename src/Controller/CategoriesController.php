<?php

namespace App\Controller;

use Cake\Utility\Text;
use Cake\I18n\I18n;
use Cake\ORM\TableRegistry;

class CategoriesController extends AppController
{
    public function view(){
        $categories = TableRegistry::get('Categories');
        $categories->recover();
        $list = $categories->find('treeList');
        $this->set('list',$list);   //encontra e define as categorias
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
                $this->Flash->success('Sucesso');
                //faz qualquer coisa
            }
            else{
                $this->Flash->error('Nao foi possivel guardar'); //envia uma mensagem de erro
            }
        }
    }

}
