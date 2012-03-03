<?php
/* CouponInfos Test cases generated on: 2012-01-28 21:05:21 : 1327784721*/
App::uses('CouponInfosController', 'Controller');

/**
 * TestCouponInfosController *
 */
class TestCouponInfosController extends CouponInfosController {
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
 * CouponInfosController Test Case
 *
 */
class CouponInfosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.coupon_info', 'app.coupon_type', 'app.campaign');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CouponInfos = new TestCouponInfosController();
		$this->CouponInfos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CouponInfos);

		parent::tearDown();
	}

}
