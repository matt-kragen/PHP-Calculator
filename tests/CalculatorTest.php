<?php
// run "./vendor/bin/phpunit" in Terminal

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd()
    {
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }

    public function testSubtract()
    {
        $calculator = new App\Calculator;
        $result = $calculator->subtract(15, 5);

        $this->assertEquals(10, $result);
    }

    public function testMultiply()
    {
        $calculator = new App\Calculator;
        $result = $calculator->multiply(2, 3);

        $this->assertEquals(6, $result);
    }

    public function testDivide()
    {
        $calculator = new App\Calculator;
        $result = $calculator->divide(24, 2);

        $this->assertEquals(12, $result);
    }
}