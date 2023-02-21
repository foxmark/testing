<?php

namespace Unit\AppBundle\Services;

use Foxmark\Services\CarService;
use PHPUnit\Framework\TestCase;

class CarServiceTest extends TestCase
{
    public function testTrueIsAlwaysTrue()
    {
        $this->assertTrue(true);
    }

    public function testBootstrapUsed()
    {
        $this->assertSame('localhost', TEST_HOSTANME);
    }

    public function testCarIsInstanceOfCarService()
    {
        $car = new CarService();
        $this->assertInstanceOf(CarService::class, $car);
    }

    public function testCarServiceConf1IsAlways23()
    {
        $car = new CarService();
        $car_config = $car::CONF_1;
        $this->assertEquals(23, $car_config, 'Invalid CONF_1 value');
    }
}