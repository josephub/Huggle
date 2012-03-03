<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 */
class CategoriesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function get_categories(){
    	  $this->layout = 'ajax';
	}

	public function generate_list(){
    	        $this->layout = 'ajax';
	}

	public function edit(){
		$category = $this->request->data['Category'];
		$this->Category->create();
		if ($category['id'] == 0){
			$this->Category->save(array('category' => $category['category']));
		}
		else{
			$this->Category->save($this->request->data);
		}
	}

    	public function delete() {
		$this->layout = 'ajax';
    	  	if ($this->request->is('post')) {
			$data = array('id' => $this->request->data['id'],
				'deleted_at' => 'NOW ()'
			);
			$user = $this->Category->save($data);
    	  	}
		$this->render('/Users/save');
    	}

}
