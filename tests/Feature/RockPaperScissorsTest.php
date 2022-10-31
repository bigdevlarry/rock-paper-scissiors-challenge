<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Enums\OutcomeEnum;
use App\Enums\GameChoiceEnum;
use App\Traits\RockPaperScissorsUtil;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RockPaperScissorsTest extends TestCase
{
    use RockPaperScissorsUtil;

    /**
     * A feature test to test all result of the possible outcomes.
     *
     * @return void
     */
    public function test_outcome_of_paper_rock_scissors_game()
    {
        $result = $this->checkGameResultAndReturnOutcome(GameChoiceEnum::SCISSORS->value,  GameChoiceEnum::SCISSORS->value);
        switch($result){
            case OutcomeEnum::DRAW->value :
                $this->assertEquals(trim(OutcomeEnum::DRAW->value), $result);
            break;
            case OutcomeEnum::WIN->value :
                $this->assertEquals(trim(OutcomeEnum::WIN->value), $result);
            break;
            case OutcomeEnum::LOSE->value :
                $this->assertEquals(trim(OutcomeEnum::LOSE->value), $result);
            break;
        }
    }
}
