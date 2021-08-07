<?php

class L0241
{
    /**
     * @param String $expression
     * @return Integer[]
     */
    function diffWaysToCompute($expression)
    {
        $numbers = array();
        $operators = array();
        $split_result = str_split($expression);
        $current_number = 0;
        foreach ($split_result as $char) {
            if ($char >= '0' && $char <= '9') {
                $current_number = $current_number * 10 + ($char - '0');
            } else {
                array_push($numbers, $current_number);
                array_push($operators, $char);
                $current_number = 0;
            }
        }
        array_push($numbers, $current_number);
        return $this->divideNumber($numbers, 0, count($numbers) - 1, $operators);
    }

    /**
     * @param Integer[] $numbers
     * @param Integer $startIndex
     * @param Integer $endIndex
     * @param String[] $operators
     * @return Integer[]
     */
    function divideNumber($numbers, $startIndex, $endIndex, $operators)
    {
        $result = array();
        if ($startIndex == $endIndex) {
            array_push($result, $numbers[$startIndex]);
            return $result;
        }
        for ($i = $startIndex; $i < $endIndex; $i++) {
            $auxArray = $this->divideOperator($this->divideNumber($numbers, $startIndex, $i, $operators),
                $this->divideNumber($numbers, $i + 1, $endIndex, $operators),
                $operators[$i]);
            $result = array_merge($result, $auxArray);
        }
        return $result;
    }

    /**
     * @param Integer[] $leftNumbers
     * @param Integer[] $rightNumbers
     * @param String $operator
     * @return Integer[]
     */
    function divideOperator($leftNumbers, $rightNumbers, string $operator)
    {
        $result = array();
        foreach ($leftNumbers as $leftNumber) {
            foreach ($rightNumbers as $rightNumber) {
                if ($operator == '+') {
                    array_push($result, $leftNumber + $rightNumber);
                } else if ($operator == '-') {
                    array_push($result, $leftNumber - $rightNumber);
                } else if ($operator == '*') {
                    array_push($result, $leftNumber * $rightNumber);
                } else {
                    echo "unknown operator" . $operator;
                }
            }
        }
        return $result;
    }
}