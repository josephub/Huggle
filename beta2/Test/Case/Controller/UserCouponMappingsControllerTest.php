<?php
/* UserCouponMappings Test cases generated on: 2012-01-28 21:02:06 : 1327784526*/
App::uses('UserCouponMappingsController', 'Controller');

/**
 * TestUserCouponMappingsController *
 */
class TestUserCouponMappingsController extends UserCouponMappingsController {
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
 * UserCouponMappingsController Test Case
 *
 */
class UserCouponMappingsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_coupon_mapping', 'app.user', 'app.coupon');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCouponMappings = new TestUserCouponMappingsController();
		$this->UserCouponMappings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCouponMappings);

		parent::tearDown();
	}

}
