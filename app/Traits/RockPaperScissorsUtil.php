<?php

namespace App\Traits;

use App\Enums\OutcomeEnum;
use App\Enums\GameChoiceEnum;

trait ROCKPaperScissorsUtil
{   
    /**
     * Trait to check the possibility of a win.
     *
     * @return bool
     */
    private function checkIfGameIsWin(GameChoiceEnum $user_one_value, GameChoiceEnum $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::ROCK && $user_two_value == GameChoiceEnum::SCISSORS) || ($user_one_value == GameChoiceEnum::SCISSORS && $user_two_value == GameChoiceEnum::PAPER) || ($user_one_value == GameChoiceEnum::PAPER && $user_two_value == GameChoiceEnum::ROCK))
        {
            return true;
        }

        return false;
    }

    /**
     * Trait to check the possibility of a draw.
     *
     * @return bool
     */
    private function checkIfGameIsDraw(GameChoiceEnum $user_one_value, GameChoiceEnum $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::ROCK && $user_two_value == GameChoiceEnum::ROCK) || ($user_one_value == GameChoiceEnum::SCISSORS && $user_two_value == GameChoiceEnum::SCISSORS) || ($user_one_value == GameChoiceEnum::PAPER && $user_two_value == GameChoiceEnum::PAPER))
        {
            return true;
        } 

        return false;
    }

    /**
     * Trait to check the possibility of a loss.
     *
     * @return bool
     */
    private function checkIfGameIsLost(GameChoiceEnum $user_one_value, GameChoiceEnum $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::ROCK && $user_two_value == GameChoiceEnum::PAPER) || ($user_one_value == GameChoiceEnum::SCISSORS && $user_two_value == GameChoiceEnum::ROCK))
        {
            return true;
        }

        return false;
    }


    /**
     * Trait to check and return the actual outcome of the game.
     *
     * @return string
     */
    private function checkGameResultAndReturnOutcome(GameChoiceEnum $user_one_value, GameChoiceEnum $user_two_value) : OutcomeEnum
    {
        if ($this->checkIfGameIsDraw($user_one_value, $user_two_value)) return OutcomeEnum::DRAW;

        if ($this->checkIfGameIsLost($user_one_value, $user_two_value)) return OutcomeEnum::LOSE;

        if ($this->checkIfGameIsWin($user_one_value, $user_two_value)) return OutcomeEnum::WIN;
    }
}

