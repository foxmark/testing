<?php

namespace Tests\Unit\AppBundle\Services;

use App\Services\CarService;
use PHPUnit\Framework\TestCase;

class CarServiceTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
    }

    public function testTwo()
    {
        $car = new CarService();
        $this->assertInstanceOf(CarService::class, $car);
    }

    public function testThree()
    {
        $car = new CarService();
        $car_config = $car::CONF_1;
        $this->assertEquals(23, $car_config);
}
}