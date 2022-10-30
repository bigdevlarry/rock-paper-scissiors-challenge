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
    private function checkIfGameIsWin( GameChoiceEnum| string $user_one_value, GameChoiceEnum| string $user_two_value) : bool
    {
        if(($this->trimUserInput($user_one_value) == GameChoiceEnum::ROCK->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::SCISSORS->value) || 
                ( $this->trimUserInput($user_one_value) == GameChoiceEnum::SCISSORS->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::PAPER->value) || 
                    ( $this->trimUserInput($user_one_value) == GameChoiceEnum::PAPER->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::ROCK->value))
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
    private function checkIfGameIsDraw( GameChoiceEnum| string $user_one_value, GameChoiceEnum| string $user_two_value) : bool
    {
        if(($this->trimUserInput($user_one_value) == GameChoiceEnum::ROCK->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::ROCK->value) ||
             ($user_one_value == GameChoiceEnum::SCISSORS->value && $user_two_value == GameChoiceEnum::SCISSORS->value) || 
                ($this->trimUserInput($user_one_value) == GameChoiceEnum::PAPER->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::PAPER->value))
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
    private function checkIfGameIsLost( GameChoiceEnum| string $user_one_value, GameChoiceEnum|string $user_two_value) : bool
    {
        if(($this->trimUserInput($user_one_value) == GameChoiceEnum::ROCK->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::PAPER->value) ||
             ($this->trimUserInput($user_one_value) == GameChoiceEnum::SCISSORS->value && $this->trimUserInput($user_two_value) == GameChoiceEnum::ROCK->value))
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
    private function checkGameResultAndReturnOutcome( GameChoiceEnum| string $user_one_value, GameChoiceEnum| string $user_two_value) : string
    {
        if ($this->checkIfGameIsDraw($this->trimUserInput($user_one_value), $this->trimUserInput($user_two_value))){
            return OutcomeEnum::DRAW->value;
        } 

        if ($this->checkIfGameIsLost($this->trimUserInput($user_one_value), $this->trimUserInput($user_two_value))) {
            return  OutcomeEnum::LOSE->value;
        }
       
        if ($this->checkIfGameIsWin($this->trimUserInput($user_one_value), $this->trimUserInput($user_two_value))){
            return OutcomeEnum::WIN->value;
        } 
    }

    private function trimUserInput($value) : string
    {
        return trim(ucfirst($value));
    }
}

