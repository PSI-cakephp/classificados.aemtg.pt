<?php
    namespace App\Model\Table;
    use Cake\ORM\Table;

    class CategoriesTable extends Table{

        public function initialize(array $config)
        {
            //$this->hasMany('Adds');

            $this->displayField('name');
        }

        public function getSectionTree(){
            $list = [];
            $i = 0;
            $parentCategory = $this->find('all')->where('parent_id is null');
            foreach($parentCategory as $parentValue){
                $list[$i]['id'] = $parentValue['id'];
                $list[$i]['name'] = $parentValue['name'];
                $list[$i]['icon'] = $parentValue['icon'];
                $list[$i]['parent_id'] = $parentValue['parent_id'];
                $i++;
                $childCategory = $this->find('all')->where('parent_id ='.$parentValue['id']);
                foreach($childCategory as $childValue){
                    $list[$i]['id'] = $childValue['id'];
                    $list[$i]['name'] = $childValue['name'];
                    $list[$i]['icon'] = $childValue['icon'];
                    $list[$i]['parent_id'] = $childValue['parent_id'];
                    $i++;
                }
            }
            return $list;
        }
    }
?>
