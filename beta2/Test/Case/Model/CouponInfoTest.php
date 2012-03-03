<?php
/* CouponInfo Test cases generated on: 2012-01-28 21:05:11 : 1327784711*/
App::uses('CouponInfo', 'Model');

/**
 * CouponInfo Test Case
 *
 */
class CouponInfoTestCase extends CakeTestCase {
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

		$this->CouponInfo = ClassRegistry::init('CouponInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CouponInfo);

		parent::tearDown();
	}

}
