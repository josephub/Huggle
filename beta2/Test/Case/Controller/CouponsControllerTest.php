<?php
/* Coupons Test cases generated on: 2012-01-28 21:04:06 : 1327784646*/
App::uses('CouponsController', 'Controller');

/**
 * TestCouponsController *
 */
class TestCouponsController extends CouponsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CouponsController Test Case
 *
 */
class CouponsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.coupon', 'app.user_coupon_mapping', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Coupons = new TestCouponsController();
		$this->Coupons->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coupons);

		parent::tearDown();
	}

}
