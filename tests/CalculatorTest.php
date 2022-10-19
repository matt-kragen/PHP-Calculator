<?php
// run "./vendor/bin/phpunit" in Terminal
use PHPUnit\Framework\TestCase;

class CalculatorTest extends \PHPUnit\Framework\TestCase {

    private $calculator;
    
    public function setUp(): void {
        $this->calculator = new App\Calculator();
    }
    
    public function testAdd(): void {
        $result = $this->calculator->add(20,5);
        $this->assertEquals(25, $result);
    }

    public function testSubtract(): void {
        $result = $this->calculator->subtract(15, 5);
        $this->assertEquals(10, $result);
    }

    public function testMultiply(): void {
        $result = $this->calculator->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivide(): void {
        $result = $this->calculator->divide(24, 2);
        $this->assertEquals(12, $result);
    }
}