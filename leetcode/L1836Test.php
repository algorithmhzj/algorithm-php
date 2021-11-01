<?php

use PHPUnit\Framework\TestCase;

include 'L1836.php';
include 'LeetCodeUtil.php';

class L1836Test extends TestCase
{

    public function testDeleteDuplicatesUnsortedCase1()
    {
        $l = new L1836();
        $listNode = $l->deleteDuplicatesUnsorted(LeetCodeUtil::convert2ListNode("1,2,3,2"));
        self::assertEquals(1, $listNode->val);
        $listNode = $listNode->next;
        self::assertEquals(3, $listNode->val);
        self::assertNull($listNode->next);
    }

    public function testDeleteDuplicatesUnsortedCase2()
    {
        $l = new L1836();
        $listNode = $l->deleteDuplicatesUnsorted(LeetCodeUtil::convert2ListNode("2,1,1,2"));
        self::assertNull($listNode);
    }

}
