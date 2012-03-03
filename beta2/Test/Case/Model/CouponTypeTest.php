<?php
/* CouponType Test cases generated on: 2012-01-28 21:04:38 : 1327784678*/
App::uses('CouponType', 'Model');

/**
 * CouponType Test Case
 *
 */
class CouponTypeTestCase extends CakeTestCase {
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

		$this->CouponType = ClassRegistry::init('CouponType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CouponType);

		parent::tearDown();
	}

}
