<?php
App::uses('AppController', 'Controller');
/**
 * Stores Controller
 *
 * @property Store $Store
 */
class StoresController extends AppController {


	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function get_list(){
    	  $this->layout = 'ajax';
	}

	public function generate_list(){
    	        $this->layout = 'ajax';
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Store->recursive = 0;
		$this->set('stores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			throw new NotFoundException(__('Invalid store'));
		}
		$this->set('store', $this->Store->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Store->create();
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if ($this->request->is('post') || $this->request->is('put')) {
			$store = $this->request->data['Store'];
			$this->Store->create();
			if ($store['id'] == 0){
				$this->Store->save(array('name' => $store['name'], 'location' => $store['location']));
			}
			else{
				$this->Store->save($this->request->data);
			}
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'ajax';
    	  	if ($this->request->is('post')) {
			$data = array('id' => $this->request->data['id'],
				'deleted_at' => 'NOW ()'
			);
			$user = $this->Store->save($data);
    	  	}
		$this->render('/Users/save');
	}
}
