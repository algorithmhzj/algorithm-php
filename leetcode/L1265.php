<?php


class L1265
{
    /**
     * @param ImmutableListNode $head
     * @return void
     */
    function printLinkedListInReverse($head)
    {
        if (is_null($head)) {
            return;
        }
        $q = new SplStack();
        $q[] = $head;
        while (true) {
            $next = $head->getNext();
            if (is_null($next)) {
                break;
            } else {
                $q[] = $next;
            }
            $head = $next;
        }
        $q->rewind();
        while ($q->valid()) {
            $current = $q->current();
            $current->printValue();
            $q->next();
        }
    }
}