<?php

class L0141
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if (is_null($head)) {
            return false;
        }
        $one_step = $head;
        $two_step = $head;
        while (true) {
            $one_step = $one_step->next;
            if (is_null($one_step)) {
                return false;
            }
            $two_step = $two_step->next;
            if (is_null($two_step)) {
                return false;
            }
            $two_step = $two_step->next;
            if (is_null($two_step)) {
                return false;
            }
            if ($one_step == $two_step) {
                return true;
            }
        }
    }
}