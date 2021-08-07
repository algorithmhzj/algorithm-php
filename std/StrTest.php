<?php

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testStr()
    {
        echo "Begin";
        echo ("1hbdshb" == 1), "\n";
        echo ("0hbdshb" == 1), "\n";
        echo ("0hbdshb" == true), "\n";
        echo "End";
    }
}