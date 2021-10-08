<?php

use \Iteearmah\IsEven\IsEven;
use PHPUnit\Framework\TestCase;

class IsEvenTest extends TestCase
{
    public function testInstantiationOfIsEven(): void
    {
        $isEven = new IsEven();
        $this->assertInstanceOf(IsEven::class, $isEven);
    }

    public function testIsEven(): void
    {
        $isEven = new IsEven();
        $this->assertTrue($isEven::check(2));
    }

    public function testNotIsEven(): void
    {
        $isEven = new IsEven();
        $this->assertFalse($isEven::check(1));
    }

    public function testBooleanIsEven(): void
    {
        $isEven = new IsEven();
        $this->assertIsBool($isEven::check(2));
    }
}