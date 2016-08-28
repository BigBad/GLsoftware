<?php
/**
 * Created by PhpStorm.
 * User: mschmidt
 * Date: 8/24/2016
 * Time: 3:11 PM
 */

namespace GLsoftware\Golf;


class CourseHandicap
{
    const SLOPE = 113;

    /**
     * @param $handicap
     * @param $courseSlope
     * @return float
     */
    public function get($handicap, $courseSlope)
    {
        // course handicaps are rounded to the nearest whole number
        return round((($handicap * $courseSlope) / self::SLOPE),0);
    }
}