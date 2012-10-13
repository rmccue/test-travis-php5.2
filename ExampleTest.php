<?php

$contents = file_get_contents('/home/travis/.phpenv/versions/5.2.17/pear/File/Iterator/Autoload.php');
echo $contents;

class ExampleTest extends PHPUnit_Framework_TestCase {
	public function testBasicPass() {
		$this->assertTrue(true);
	}

	public function testBasicFail() {
		$this->assertFalse(true);
	}
}