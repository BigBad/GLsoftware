<?php
/**
 * Created by PhpStorm.
 * User: michaelschmidt
 * Date: 8/17/16
 * Time: 9:44 PM
 */

namespace GLsoftware\Golf;


class EquitableScoreControl
{
    private $escResultArray;

    /**
     *
     * @param array $holeScores
     * @param $courseHandicap
     * @return array
     */
    public function adjustScores(array $holeScores, $courseHandicap)
    {
        foreach($holeScores as $key => $holeScore){
            $maxHoleScore = $this->getMaxAllowableHoleScore($holeScore['par'],$courseHandicap);

            if($holeScore['score'] >= $maxHoleScore ){
                $this->escResultArray[] = $maxHoleScore;
            } else {
                $this->escResultArray[] = $holeScore['score'];
            }
        }

        return $this->escResultArray;
    }

    // Using a players course handicap which is a whole number
    /**
     * @param $par
     * @param $courseHandicap
     * @return int
     */
    public function getMaxAllowableHoleScore($par, $courseHandicap)
    {
        switch(true) {
            case ($courseHandicap <= 9):
                $maxScore = $par + 2;
                break;
            case (($courseHandicap > 9) && ($courseHandicap < 20)): //10-19
                $maxScore = 7;
                break;
            case (($courseHandicap >= 20) && ($courseHandicap < 30))://20-29
                $maxScore = 8;
                break;
            case (($courseHandicap >= 30) && ($courseHandicap < 40))://30-39
                $maxScore = 9;
                break;
            case ($courseHandicap >= 40):
                $maxScore = 10;
        }
        return $maxScore;
    }
}
