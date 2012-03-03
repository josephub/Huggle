<?php
/* UserCouponMapping Test cases generated on: 2012-01-28 21:02:01 : 1327784521*/
App::uses('UserCouponMapping', 'Model');

/**
 * UserCouponMapping Test Case
 *
 */
class UserCouponMappingTestCase extends CakeTestCase {
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

		$this->UserCouponMapping = ClassRegistry::init('UserCouponMapping');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCouponMapping);

		parent::tearDown();
	}

}
