<?php
App::uses('AppController', 'Controller');
/**
 * Campaigns Controller
 *
 */
class CampaignsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	
	//var $actsAs = array(
  //  'MeioUpload' => array(
  //      'picture' => array(
  //          'dir' => 'img{DS}{model}{DS}{field}',
  //          'create_directory' => true,
  //          'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
  //          'allowed_ext' => array('.jpg', '.jpeg', '.png'),
  //          'thumbsizes' => array(
  //              'normal' => array('width'=>200, 'height'=>200),
  //          ),
  //          'default' => 'default.jpg',
  //      )
  //  )
  //  );
	
    function beforeFilter() {
        $this->Auth->allow('get_featured', 'get_deal_info', 'search');
    }
	
	public function get_featured(){
		
		$options['joins'] = array(    
			array(
				'table' => 'coupon_types',        
				'alias' => 'CouponTypes',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponTypes.id = coupon_type_id',        
					)   
			),
			array(
				'table' => 'coupon_infos',        
				'alias' => 'CouponInfos',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponInfos.id = coupon_info_id',        
					)   
			),		
		);
		
		$options['limit'] = '5';
		$options['order'] = 'CouponInfos.rank ASC, CouponTypes.name ASC';

		$this->set('featuredPromos',$this->Campaign->find('all',$options));
		
	}
	
	public function get_deal_info($campaignId){

		$options['joins'] = array(    
			array(
				'table' => 'coupon_types',        
				'alias' => 'CouponTypes',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponTypes.id = coupon_type_id',        
					)   
			),
			array(
				'table' => 'coupon_infos',        
				'alias' => 'CouponInfos',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponInfos.id = coupon_info_id',        
					)   
			)
		);

		$options['order'] = 'CouponInfos.rank ASC, CouponTypes.name ASC';
		
		$this->set('featuredPromos',$this->Campaign->find('all',$options));
		$this->set('deal',$this->Campaign->find('first', array(
			'conditions' => 'Campaign.id = '.$campaignId
		)));
		
	}
	
	public function search(){
	
		if ($this->request->is('post')){
			$searchString = $this->data['searchString'];
		}
		else{
			$searchString = "";
		}
		
		$options['joins'] = array(    
			array(
				'table' => 'coupon_types',        
				'alias' => 'CouponTypes',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponTypes.id = coupon_type_id',        
					)   
			),
			array(
				'table' => 'coupon_infos',        
				'alias' => 'CouponInfos',        
				'type' => 'LEFT',        
				'conditions' => array(            
					'CouponInfos.id = coupon_info_id',        
					)   
			)
		);

		$options['order'] = 'CouponInfos.rank ASC, CouponTypes.name ASC';	
		$this->set('results',$this->Campaign->find('all', array(
			'conditions' => 'CouponType.name like "'.$searchString.'%"'
		)));
	
	}

    public function create_deal() {
    	
    	$this->layout = 'ajax';
    	if(!empty($this->data)) {
    		var_dump($this->User->saveAll($this->data));      
    		if($this->User->saveAll($this->data)) {                
    			$this->Session->setFlash("User Profile Updated!");            
    		}    
    	}     
    	//$this->data = $this->User->findById($this->Auth->user('id'));
    }

}
