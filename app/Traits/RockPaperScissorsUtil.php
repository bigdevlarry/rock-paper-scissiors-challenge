<?php

namespace App\Traits;

use App\Enums\OutcomeEnum;
use App\Enums\GameChoiceEnum;

trait RockPaperScissorsUtil
{   
    /**
     * Trait to check the possibility of a win.
     *
     * @return bool
     */
    private function checkIfGameIsWin($user_one_value, $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::Rock && $user_two_value == GameChoiceEnum::Scissors) || ($user_one_value == GameChoiceEnum::Scissors && $user_two_value == GameChoiceEnum::Paper) || ($user_one_value == GameChoiceEnum::Paper && $user_two_value == GameChoiceEnum::Rock))
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
    private function checkIfGameIsDraw($user_one_value, $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::Rock && $user_two_value == GameChoiceEnum::Rock) || ($user_one_value == GameChoiceEnum::Scissors && $user_two_value == GameChoiceEnum::Scissors) || ($user_one_value == GameChoiceEnum::Paper && $user_two_value == GameChoiceEnum::Paper))
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
    private function checkIfGameIsLost($user_one_value, $user_two_value) : bool
    {
        if(($user_one_value == GameChoiceEnum::Rock && $user_two_value == GameChoiceEnum::Paper) || ($user_one_value == GameChoiceEnum::Scissors && $user_two_value == GameChoiceEnum::Rock))
        {
            return true;
        }

        return false;
    }
}

