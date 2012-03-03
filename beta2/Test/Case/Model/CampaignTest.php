<?php
/* Campaign Test cases generated on: 2012-01-28 21:04:24 : 1327784664*/
App::uses('Campaign', 'Model');

/**
 * Campaign Test Case
 *
 */
class CampaignTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.campaign', 'app.coupon_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Campaign = ClassRegistry::init('Campaign');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Campaign);

		parent::tearDown();
	}

}
