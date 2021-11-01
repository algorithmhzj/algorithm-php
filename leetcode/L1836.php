<?php

class L1836
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicatesUnsorted($head) {
        if (is_null($head)) {
            return null;
        }
        $all_set = array();
        $duplicate_set = array();
        $iterator_aux = $head;
        while (!is_null($iterator_aux)) {
            $val = $iterator_aux->val;
            if (!array_key_exists($val, $all_set)) {
                $all_set[$val] = $val;
            } else {
                $duplicate_set[$val] = $val;
            }
            $iterator_aux = $iterator_aux->next;
        }
        $iterator_aux = $head;
        $dummy = new ListNode(0);
        $cur = $dummy;
        while (!is_null($iterator_aux)) {
            $iterator_cpy = $iterator_aux;
            $iterator_aux = $iterator_aux->next;
            if (!array_key_exists($iterator_cpy->val, $duplicate_set)) {
                $cur->next = $iterator_cpy;
                $cur = $iterator_cpy;
                $iterator_cpy->next = null;
            }
        }
        return $dummy->next;
    }
}