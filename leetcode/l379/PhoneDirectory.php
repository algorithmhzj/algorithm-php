<?php

/**
 * inspired by https://leetcode.com/problems/design-phone-directory/discuss/122908/Java-O(1)-time-o(n)-space-single-Array-99ms-beats-100
 */
class PhoneDirectory
{
    private $array = array();

    private $pos = 0;

    /**
     * @param Integer $maxNumbers
     */
    function __construct($maxNumbers)
    {
        for ($i = 0; $i < $maxNumbers; $i++) {
            $this->array[$i] = ($i + 1) % $maxNumbers;
        }
    }

    /**
     * @return Integer
     */
    function get()
    {
        if ($this->array[$this->pos] == -1) {
            return -1;
        }
        $ret = $this->pos;
        $this->pos = $this->array[$this->pos];
        $this->array[$ret]=-1;
        return $ret;
    }

    /**
     * @param Integer $number
     * @return Boolean
     */
    function check($number)
    {
        return $this->array[$number] != -1;
    }

    /**
     * @param Integer $number
     * @return NULL
     */
    function release($number)
    {
        if ($this->array[$number] != -1) {
            return;
        }
        $this->array[$number] = $this->pos;
        $this->pos = $number;
    }
}