<?php
require APPLICATION_PATH . '/Example.php';

class ExampleTest extends PHPUnit_Framework_TestCase{
	public function testSomething(){
		$ex = new Example();
		$this->assertEquals($ex->foo(),'bar');
	}
}

?>