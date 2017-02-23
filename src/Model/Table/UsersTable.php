<?php
	namespace App\Model\Table;

	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class UsersTable extends Table
	{
		public function validationUsers(Validator $validator)
		{
			$validator
				->notEmpty('username', 'Please fill this field')
				->notEmpty('password', 'Please fill this field')
				->notEmpty('email', 'Please fill this field')
				->notEmpty('first_name', 'Please fill this field')
				->notEmpty('last_name', 'Please fill this field')
				->notEmpty('mobile_number', 'Please fill this field')
				->notEmpty('confirm_password', 'Please fill this field')
				->add('password', 'passwordsEqual', [
    				'rule' => function ($value, $context) {
        				return
            				isset($context['data']['confirm_password']) &&
            				$context['data']['confirm_password'] === $value;
    					},
    				'message' => 'Password Invalid'
					])
				->add('email', 
        			['unique' => [
            			'rule' => 'validateUnique', 
            			'provider' => 'table', 
            			'message' => 'Já existente']
        			]
    			)
    			->add('username', 
        			['unique' => [
            			'rule' => 'validateUnique', 
            			'provider' => 'table', 
            			'message' => 'Not unique']
        			]
    			)
    			->add('mobile_number', 
        			['unique' => [
            			'rule' => 'validateUnique', 
            			'provider' => 'table', 
            			'message' => 'Not unique']
        			]
    			);

				return $validator;
		}

	}
?>