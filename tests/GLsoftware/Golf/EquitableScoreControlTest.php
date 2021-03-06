<?php
/**
 * Created by PhpStorm.
 * User: michaelschmidt
 * Date: 8/17/16
 * Time: 10:50 PM
 */

namespace GLsoftware\Golf\Tests;


use GLsoftware\Golf\EquitableScoreControl;

class EquitableScoreControlTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaxAllowableHoleScore()
    {
        $esc = new EquitableScoreControl();

        $this->assertEquals(6, $esc->getMaxAllowableHoleScore(4,-1));
        $this->assertEquals(6, $esc->getMaxAllowableHoleScore(4,0));
        $this->assertEquals(6, $esc->getMaxAllowableHoleScore(4,9));
        $this->assertEquals(7, $esc->getMaxAllowableHoleScore(4,10));
        $this->assertEquals(8, $esc->getMaxAllowableHoleScore(4,20));
        $this->assertEquals(9, $esc->getMaxAllowableHoleScore(4,30));
        $this->assertEquals(10, $esc->getMaxAllowableHoleScore(4,40));
    }

    function testAdjustScores()
    {
        $holeScores = [
            [
                'par'   => 4,
                'score' => 8
            ],
            [
                'par'   => 4,
                'score' => 5
            ],
            [
                'par'   => 5,
                'score' => 8
            ],
            [
                'par'   => 3,
                'score' => 3
            ]
        ];
        $courseHandicap = 6;
        $expectedArray = [6,5,7,3];

        $esc = new EquitableScoreControl();
        $this->assertEquals($expectedArray,$esc->adjustScores($holeScores,$courseHandicap));
    }
}
