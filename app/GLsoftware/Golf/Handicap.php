<?php
/**
 * Created by PhpStorm.
 * User: Michael Schmidt
 * Date: 8/14/16
 * Time: 8:22 PM
 */

namespace GLsoftware\Golf;


class Handicap
{
    const SLOPE = 113;
    private $roundsEnteredArray;
    private $scores;

    public function __construct(array $scores)
    {
        $this->roundsEnteredArray = [0,1,1,1,1,1,1,2,2,3,3,4,4,5,5,6,6,7,8,9,10];
        $this->scores = $scores;
    }

    public function getScores()
    {
        return $this->scores;
    }

    public function getDifferential()
    {
        $numberOfScores = count($this->scores);
        return $this->roundsEnteredArray[$numberOfScores];
    }
}
