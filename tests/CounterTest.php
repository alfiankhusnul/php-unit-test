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
}