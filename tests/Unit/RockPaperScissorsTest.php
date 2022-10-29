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
    public function test_if_game_result_is_win()
    {
        $result = $this->checkIfGameIsWin(GameChoiceEnum::Rock, GameChoiceEnum::Scissors);
        $this->assertEquals(true, $result);
    }

    /**
     * A unit test if game result is a draw.
     *
     * @return void
     */
    public function test_if_game_result_is_draw()
    {
        $result = $this->checkIfGameIsDraw(GameChoiceEnum::Rock, GameChoiceEnum::Rock);
        $this->assertEquals(true, $result);
    }

    /**
     * A unit test if game result is lost.
     *
     * @return void
     */
    public function test_if_game_result_is_lose()
    {
        $result = $this->checkIfGameIsLost(GameChoiceEnum::Rock, GameChoiceEnum::Paper);
        $this->assertEquals(true, $result);
    }
}
