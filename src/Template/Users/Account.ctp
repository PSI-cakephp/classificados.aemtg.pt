<?php
    	echo $this->Form->create($user,['enctype'=>'multipart/form-data']);
    	echo $this->Form->input('email', ['type' => 'string']);
    	echo $this->Form->input('username', ['type' => 'string']);
    	echo $this->Form->input('password', ['type' => 'password']);
    	echo $this->Form->input('first_name', ['type' => 'string']);
    	echo $this->Form->input('last_name', ['type' => 'string']);
    	echo $this->Form->input('mobile_number', ['type' => 'number']);
    	echo $this->Form->input('date_of_birth', ['type' => 'date']);
    	echo $this->Form->input('profile_picture', array('type'=>'file'));
    	echo $this->Form->button('Cancelar', ['type' => 'reset']);
    	echo $this->Form->button('Ok', ['type' => 'submit']);
    	echo $this->Form->end();

?>