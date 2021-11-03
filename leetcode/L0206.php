<?php

class L0206
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if (is_null($head)) {
            return null;
        }
        $last = null;
        while (true) {
            if ($head->next == null) {
                $head->next = $last;
                return $head;
            }
            $aux = $head->next;
            $head->next = $last;
            $last = $head;
            $head = $aux;
        }
    }
}