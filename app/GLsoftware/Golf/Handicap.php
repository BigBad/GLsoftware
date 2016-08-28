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
    private $roundsEnteredArray;
    private $scores;
    private $numberOfScores;

    /**
     * Handicap constructor.
     * @param array $scores
     */
    public function __construct(array $scores)
    {
        $this->roundsEnteredArray = [0,1,1,1,1,1,1,2,2,3,3,4,4,5,5,6,6,7,8,9,10];
        $this->scores = $scores; // These should be ESC adjusted scores
        $this->numberOfScores = count($this->scores);
    }

    /**
     * @return array
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * @return mixed
     */
    public function getDifferential()
    {
        return $this->roundsEnteredArray[$this->numberOfScores];
    }

    /**
     * @return float
     */
    public function get()
    {
        return ((array_sum($this->scores)/$this->numberOfScores) * 0.96) - 72;
    }
}
