<?php
/**
 * Created by PhpStorm.
 * User: mschmidt
 * Date: 9/13/2016
 * Time: 10:32 AM
 */

namespace GLsoftware\Golf\Tests;


use GLsoftware\Golf\Course;

class CourseTest extends \PHPUnit_Framework_TestCase
{
    private $course;
    private $rating;
    private $slope;

    public function setUp()
     {
         $this->rating = 72.5;
         $this->slope = 126;
         $this->course = new Course($this->rating, $this->slope);
     }

     public function testGetRating()
     {
       $this->assertEquals($this->rating, $this->course->getRating());
     }

    public function testSetRating()
    {
        $newRating = 73.5;
        $this->course->setRating($newRating);
        $this->assertEquals($newRating, $this->course->getRating());
    }

    public function testGetSlope()
    {
        $this->assertEquals($this->slope, $this->course->getSlope());
    }

    public function testSetSlope()
    {
        $newSlope = 127;
        $this->course->setSlope($newSlope);
        $this->assertEquals($newSlope, $this->course->getSlope());
    }

}
