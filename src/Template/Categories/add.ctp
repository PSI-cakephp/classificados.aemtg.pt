<?php
    echo $this->Form->create().
            $this->Form->input('parent',['id' => 'parent','options' => $categories]).
            $this->Form->input('name', ['id' => 'name']).
            $this->Form->button('Cancelar', ['type' => 'reset']).
            $this->Form->button('OK',['class' => 'submit']).
         $this->Form->end();
?>
