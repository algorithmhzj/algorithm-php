<?php

class L0369
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function plusOne($head) {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $notNine = $dummy;

        // find the rightmost not-nine digit
        while ($head != null) {
            if ($head->val != 9) {
                $notNine = $head;
            }
            $head = $head->next;
        }

        // increase this rightmost not-nine digit by 1
        $notNine->val++;
        $notNine = $notNine->next;

        // set all the following nines to zeros
        while ($notNine != null) {
            $notNine->val = 0;
            $notNine = $notNine->next;
        }
        if ($dummy->val == 0) {
            return $dummy->next;
        } else {
            return $dummy;
        }
    }
}