<?php
/**
 * Created by PhpStorm.
 * User: michaelschmidt
 * Date: 8/16/16
 * Time: 11:17 PM
 */

namespace GLsoftware\Golf\Tests;


use GLsoftware\Golf\Handicap;

class HandicapTest extends \PHPUnit_Framework_TestCase
{

    public function testGetScores()
    {
        $scores = [75, 83, 105];
        $handicap = new Handicap($scores);

        $this->assertEquals($scores, $handicap->getScores());
    }

    public function testGetDifferential()
    {
        $scores = [75, 83, 105, 85, 95, 83];
        $handicap = new Handicap($scores);

        $this->assertEquals(1,$handicap->getDifferential());

        array_push($scores,88);
        $handicap = new Handicap($scores);
        $this->assertEquals(2,$handicap->getDifferential());
    }

    public function testGetHandicap()
    {
        $scores = [75, 83, 105, 85, 95, 83];
        $handicap = new Handicap($scores);
        $this->assertEquals(12.16, $handicap->get());
    }

}
