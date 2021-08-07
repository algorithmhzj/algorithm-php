<?php


use PHPUnit\Framework\TestCase;

class SplStackTest extends TestCase
{

    public function testCase1()
    {
        $q = new SplStack();

        $q[] = 1;
        $q[] = 2;
        $q[] = 3;

        $q->rewind();
        while ($q->valid()) {
            $current = $q->current();
            echo gettype($current),"\n";
            echo $current, "\n";
            $q->next();
        }
    }

    public function testPrintStack()
    {
        $q = new SplStack();

        $q[] = 1;
        $q[] = 2;
        $q[] = 3;
        $q->push(4);
        $q->add(4, 5);

        $q->rewind();
        while ($q->valid()) {
            $current = $q->current();
            echo $current, "\n";
            $q->next();
        }
    }
}
