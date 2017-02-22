<?php
    echo $this->Form->create('category',['enctype'=>'multipart/form-data']).
            $this->Form->input('parent',['id' => 'parent','options' => $categories,'empty' => 'null']).
            $this->Form->input('name', ['id' => 'name']).
            $this->Form->checkbox('selectable',['id' => 'selectable', 'value' => 'Selectable']).'Selectable <br>'.
            $this->Form->input('icon', ['type'=>'file', 'accept' => 'image/*','label' => false]).
            $this->Form->button('Cancelar', ['type' => 'reset']).
            $this->Form->button('OK').
         $this->Form->end();
?>
