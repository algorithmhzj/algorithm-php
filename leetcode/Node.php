<?php

class Node
{
    public $val = null;
    public $next = null;

    function __construct($val = 0)
    {
        $this->val = $val;
        $this->next = null;
    }
}