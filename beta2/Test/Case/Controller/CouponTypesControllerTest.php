<?php
/* CouponTypes Test cases generated on: 2012-01-28 21:04:52 : 1327784692*/
App::uses('CouponTypesController', 'Controller');

/**
 * TestCouponTypesController *
 */
class TestCouponTypesController extends CouponTypesController {
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
 * CouponTypesController Test Case
 *
 */
class CouponTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.coupon_type', 'app.coupon_info', 'app.campaign');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CouponTypes = new TestCouponTypesController();
		$this->CouponTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CouponTypes);

		parent::tearDown();
	}

}
