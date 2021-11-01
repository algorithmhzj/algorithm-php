<?php

use PHPUnit\Framework\TestCase;

include 'LeetCodeUtil.php';

class LeetCodeUtilTest extends TestCase
{

    public function testConvert2ListNode()
    {
        $listNode = LeetCodeUtil::convert2ListNode("1,2,3,2");
        print_r($listNode);
    }
}
