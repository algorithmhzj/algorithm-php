<?php

use PHPUnit\Framework\TestCase;
include 'L0241.php';


class L0241Test extends TestCase
{

    public function testDiffWaysToComputeCase1()
    {
        $l = new L0241();
        $results = $l->diffWaysToCompute("2-1-1");
        self::assertCount(2, $results);
    }

    public function testDiffWaysToCompute()
    {
        $l = new L0241();
        $results = $l->diffWaysToCompute("2*3-4*5");
        print_r($results);
    }

}
