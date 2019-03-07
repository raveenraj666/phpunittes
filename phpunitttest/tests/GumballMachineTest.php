<?php
use PHPUnit\Framework\TestCase;
require 'GumballMachine.php';
class GumballMachineTest extends TestCase
{	
	public $gumballMachineInstance;
	public function setUp(): void
	{
		$this->gumballMachineInstance = new GumballMachine();
	}
	public function testIfWheelWorks(){
		//suppose we have 100 gumbalss
		$this->gumballMachineInstance->setGumballs(100);
		// .. and we turn the wheel once..
		$this->gumballMachineInstance->turnWheel();
		//we should now have 99
		$this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
	}
} 
?>