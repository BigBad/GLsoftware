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
    private $handicap;
    private $courseSlope;

    public function __construct($handicap, $courseSlope)
    {
        $this->handicap = $handicap;
        $this->courseSlope = $courseSlope;
    }

    public function get()
    {
        // course handicaps are rounded to the nearest whole number
        return round((($this->handicap * $this->courseSlope) / self::SLOPE),0);
    }
}