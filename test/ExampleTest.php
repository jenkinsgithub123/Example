<?php
require ("../src/Example.php");

class ExampleTest extends PHPUnit_Framework_TestCase{
	public function testSomething(){
		$ex = new Example();
		$this->assertEquals($ex->foo(),'bar');
	}
}

?>