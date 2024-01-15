<?php

use PHPUnit\Framework\TestCase;
use App\Classes\Dummy;

class DummyTest extends TestCase
{
    public function testSum()
    {
        $dummyObj = new Dummy();

        $this->assertEquals(1.2, $dummyObj->sum(0.5, 0.7));
    }
}
