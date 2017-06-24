<?php

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

Class Test extends PHPUnit_Framework_TestCase{
	public function test_sample_case(){
		$this->assertEquals(1+1,2);
	}
}