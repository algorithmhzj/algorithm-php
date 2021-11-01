<?php

include "ListNode.php";

class LeetCodeUtil
{
    static function convert2ListNode($str)
    {
        $array = explode(',', $str);
        if (count($array) == 0) {
            return null;
        }
        $head = new ListNode((int)$array[0]);
        $cur = $head;
        for ($i = 1; $i < count($array); $i++) {
            $cur->next = new ListNode((int)$array[$i]);
            $cur = $cur->next;
        }
        return $head;
    }

    static function convert2CircularListNode($str)
    {
        $array = explode(',', $str);
        if (count($array) == 0) {
            return null;
        }
        $head = new ListNode((int)$array[0]);
        $cur = $head;
        for ($i = 1; $i < count($array); $i++) {
            $cur->next = new ListNode((int)$array[$i]);
            $cur = $cur->next;
        }
        $cur->next = $head;
        return $head;
    }

}