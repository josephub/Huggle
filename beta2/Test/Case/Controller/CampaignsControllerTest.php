<?php
/* Campaigns Test cases generated on: 2012-01-28 21:04:25 : 1327784665*/
App::uses('CampaignsController', 'Controller');

/**
 * TestCampaignsController *
 */
class TestCampaignsController extends CampaignsController {
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
 * CampaignsController Test Case
 *
 */
class CampaignsControllerTestCase extends CakeTestCase {
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

		$this->Campaigns = new TestCampaignsController();
		$this->Campaigns->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Campaigns);

		parent::tearDown();
	}

}
