<?php
/* Coupon Test cases generated on: 2012-01-28 21:04:03 : 1327784643*/
App::uses('Coupon', 'Model');

/**
 * Coupon Test Case
 *
 */
class CouponTestCase extends CakeTestCase {
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

		$this->Coupon = ClassRegistry::init('Coupon');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coupon);

		parent::tearDown();
	}

}
