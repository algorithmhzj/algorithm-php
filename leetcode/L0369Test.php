<?php


use PHPUnit\Framework\TestCase;

include 'L0369.php';
include 'LeetCodeUtil.php';

class L0369Test extends TestCase
{

    public function testPlusOne()
    {
        $l = new L0369();
        $results = $l->plusOne(LeetCodeUtil::convert2ListNode("1,2,9,7"));
        print_r($results);
    }
}
