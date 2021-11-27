<?php

namespace AlfianKhusnul\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Alfian");
        self::assertEquals("Hello Amar, my name is Alfian", $person->sayHello("Amar"));
    }

    public function testException()
    {
        $person = new Person("Alfian");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }


}