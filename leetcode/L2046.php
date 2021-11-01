<?php

class L2046
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function sortLinkedList($head)
    {
        if (is_null($head)) {
            return null;
        }
        $pre = $head;
        $cur = $head->next;
        while (!is_null($cur)) {
            if ($cur->val < 0) {
                $pre->next = $cur->next;
                $cur->next = $head;
                $head = $cur;
                $cur = $pre->next;
            } else {
                $pre = $cur;
                $cur = $cur->next;
            }
        }
        return $head;
    }
}