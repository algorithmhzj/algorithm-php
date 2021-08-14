<?php

class L0452
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function findMinArrowShots($points)
    {
        if (!count($points)) {
            return 0;
        }
        usort($points, function ($a, $b){
           return $a[0] <=> $b[0];
        });

        // at least you have an arrow
        $res = 1;
        $end = $points[0][1];
        for ($i =1; $i < count($points); $i++) {
            //
            if ($points[$i][0] <= $end) {
                // if the balloon is too short, we need to adjust the arrow
                $end = min($end, $points[$i][1]);
            } else {
                // we need a new arrow
                $end = $points[$i][1];
                $res++;
            }
        }
        return $res;
    }

}