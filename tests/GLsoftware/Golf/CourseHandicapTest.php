<?php
/**
 * Created by PhpStorm.
 * User: michaelschmidt
 * Date: 8/27/16
 * Time: 4:15 PM
 */

namespace GLsoftware\Golf\Tests;


use GLsoftware\Golf\CourseHandicap;

class CourseHandicapTest extends \PHPUnit_Framework_TestCase
{

    public function testGetCourseHandicap()
    {
        $courseHandicap = new CourseHandicap();
        $this->assertEquals(8,$courseHandicap->get(7.35,124));
        $this->assertEquals(9,$courseHandicap->get(7.85,124));
    }
}
