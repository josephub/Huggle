<?php
App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Facebook $Facebook
 */
class User extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $name = 'User'; 
	//public $actAs = array('SignMeUp.SignMeUp');

	public $validate = array(
	/*	
	'middleName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'firstName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cellNo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'isAdmin' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	*/
                'username' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A username is required'
                    )
                ),
                'password' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A password is required'
                    )
                ),
                'cellNo' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A cellNo is required'
                    )
                ),
                'email' => array(
                    'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'A email is required'
                    )
                ),
                'role' => array(
                    'valid' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'Please enter a valid role',
                        'allowEmpty' => false
                    )
                ),
                    'new_password' => array(
				    'required'=>'notEmpty',
				    'match'=> array(
				    'rule' => array('notEmpty'),
				    'message' => 'Password cannot be empty.'
				    )
    			),
                    'confirm_password' => array(
				    'required'=>'notEmpty',
				    'match'=>array(
				    'rule' => 'validatePasswdConfirm',
				    'message' => 'Passwords do not match'
				    )
    			)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 */
	public $hasMany = array(
		'UserCouponMapping' => array(
			'className' => 'UserCouponMapping',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
 /* @var array
 */
		function validatePasswdConfirm($data)
		{
			if ($this->data['User']['new_password'] !== $data['confirm_password'])
			{
				return false;
			}
				return true;
		}	
	
        public function beforeSave() {
            if (isset($this->data[$this->alias]['password'])) {
            	if(isset($this->data[$this->alias]['new_password'])){
            		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['new_password']);	
            	}
            	else {
                	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
            	}   
            }
            return true;
        }
        
}
