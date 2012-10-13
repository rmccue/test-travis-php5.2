<?php

class ExampleTest extends PHPUnit_Framework_TestCase {
	public function testBasicPass() {
		$this->assertTrue(true);
	}

	public function testBasicFail() {
		$this->assertFalse(true);
	}
}