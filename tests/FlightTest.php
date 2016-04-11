<?php
require_once 'src/autoload.php';
class FlightTest extends PHPUnit_Framework_TestCase
{
    public function test_search()
    {
		$flight = new Flight();
		
        // Assert
        //$this->assertEquals(2, $flight->search());
		//$this->assertNotEmpty($flight->search());
		
		$this->assertNotNull($flight->search());
    }

    // ...
}