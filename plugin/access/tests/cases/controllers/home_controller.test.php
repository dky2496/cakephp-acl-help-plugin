<?php
/* Home Test cases generated on: 2010-04-30 17:04:08 : 1272615608*/
App::import('Controller', 'Access.Home');

class TestHomeController extends HomeController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HomeControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Home =& new TestHomeController();
		$this->Home->constructClasses();
	}

	function endTest() {
		unset($this->Home);
		ClassRegistry::flush();
	}

}
?>