<?php

namespace App\Controller;

class CategoriesController extends AppController
{

    public function add(){
        $this->set('categories',$this->Categories->find('list'));
        if($this->request->is('post')){
            $category = $this->Categories->newEntity($this->request->data());
            $this->Categories->save($category);
        }
    }

}
