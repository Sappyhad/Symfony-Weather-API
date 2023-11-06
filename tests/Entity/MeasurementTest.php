<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function measurementDataProvider(): array
    {
        return [
            [0, 32],
            [-100, -148],
            [100, 212],
            [25.5, 77.9],
            [-50.75, -59.35],
            [50.25, 122.45],
            [10.33, 50.594],
            [-10.67, 12.794],
            [40.75, 105.35],
            [-40.5, -40.9],
        ];
    }

    /**
     * @dataProvider measurementDataProvider
     */

    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();
        $measurement->setCelsius($celsius);
        $fahrenheit = $measurement->getFahrenheit();
        $this->assertEquals($expectedFahrenheit, $fahrenheit);
    }
}
