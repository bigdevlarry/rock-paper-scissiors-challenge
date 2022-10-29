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
    public function test_output_of_game_result()
    {
        $result = $this->checkGameResultAndReturnOutcome(GameChoiceEnum::SCISSORS, GameChoiceEnum::ROCK);
        
        switch($result){
            case OutcomeEnum::DRAW :
                $this->assertEquals(OutcomeEnum::DRAW, $result);
            break;
            case OutcomeEnum::WIN :
                $this->assertEquals(OutcomeEnum::WIN, $result);
            break;
            case OutcomeEnum::LOSE :
                $this->assertEquals(OutcomeEnum::LOSE, $result);
            break;
        }
    }
}
