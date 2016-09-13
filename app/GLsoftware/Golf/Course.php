<?php
/**
 * Created by PhpStorm.
 * User: mschmidt
 * Date: 9/13/2016
 * Time: 10:28 AM
 */

namespace GLsoftware\Golf;


class Course
{
    private $rating;
    private $slope;

    public function __construct($rating, $slope)
    {
        $this->rating = $rating;
        $this->slope = $slope;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getSlope()
    {
        return $this->slope;
    }

    /**
     * @param mixed $slope
     */
    public function setSlope($slope)
    {
        $this->slope = $slope;
    }

}