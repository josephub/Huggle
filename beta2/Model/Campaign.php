<?php
App::uses('AppModel', 'Model');
/**
 * Campaign Model
 *
 * @property CouponType $CouponType
 */
class Campaign extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'coupon_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start_date' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_date' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	
	
	
	public $belongsTo = array(
		'CouponType' => array(
			'className' => 'CouponType',
			'foreignKey' => 'coupon_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
