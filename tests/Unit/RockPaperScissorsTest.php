<?php

namespace Tests\Unit;

use App\Enums\GameChoiceEnum;
use PHPUnit\Framework\TestCase;
use App\Traits\RockPaperScissorsUtil;

class RockPaperScissorsTest extends TestCase
{
    use RockPaperScissorsUtil;
    /**
     * A unit test if game result is a win.
     *
     * @return void
     */
    public function test_if_game_result_is_a_win()
    {
        $result = $this->checkIfGameIsWin(GameChoiceEnum::PAPER->value, GameChoiceEnum::ROCK->value);
        $this->assertEquals(true, $result);
    }

    /**
     * A unit test if game result is a draw.
     *
     * @return void
     */
    public function test_if_game_result_is_a_draw()
    {
        $result = $this->checkIfGameIsDraw(GameChoiceEnum::ROCK->value, GameChoiceEnum::ROCK->value);
        $this->assertEquals(true, $result);
    }

    /**
     * A unit test if game result is lost.
     *
     * @return void
     */
    public function test_if_game_result_is_a_lose()
    {
        $result = $this->checkIfGameIsLost(GameChoiceEnum::ROCK->value, GameChoiceEnum::PAPER->value);
        $this->assertEquals(true, $result);
    }
}
