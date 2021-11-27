<?php

namespace AlfianKhusnul\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();

        Assert::assertEquals(1, $counter->getCounter());
    }

    /**
     * @test
     */
    public function otherTest(){
        $counter = new Counter();
        $counter->increment();

        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst():Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());
        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter):void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }
}