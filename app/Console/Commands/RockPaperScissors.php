<?php

namespace App\Console\Commands;

use App\Enums\OutcomeEnum;
use App\Enums\GameChoiceEnum;
use Illuminate\Console\Command;
use App\Traits\RockPaperScissorsUtil;

class RockPaperScissors extends Command
{
    use RockPaperScissorsUtil;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rock-paper-scissors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rock-paper-scissors is a CLI game designed for two people (Human or Computer)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $user_one = $this->ask('Enter your preferred username');
        $game_options = [GameChoiceEnum::ROCK->value, GameChoiceEnum::SCISSORS->value, GameChoiceEnum::PAPER->value];
        $game_setting = $this->choice("Welcome {$user_one } !, How will you like to play Rock-Paper-Scissors? ", 
                                ['Other Human', 'Computer'], $defaultIndex = 1, $maxAttempts = null,
                                $allowMultipleSelections = false);

        switch($game_setting) {
            case 'Other Human' :
                $this->info('The game will be played with another human. To proceed enter second user preferred username');
                
                $user_two = $this->ask('Enter your preferred username');
                
                $user_one_game_choice =  $this->choice("{$user_one } !, Select game option .. ", 
                                $game_options, $defaultIndex = rand(0,2), $maxAttempts = null,
                                $allowMultipleSelections = false);

                $this->info("{$user_one } selection ok, waiting for {$user_two} ...");

                $user_two_game_choice =  $this->choice("{$user_two } !, Select game option .. ", 
                                $game_options, $defaultIndex = rand(0,2), $maxAttempts = null,
                                $allowMultipleSelections = false);

                $game_result = $this->switch_result_outcome($user_one_game_choice, $user_two_game_choice, $user_one);
            
                $this->info($game_result);
        
                return;
            break;
            default:
            $this->info('The game will be played with a computer. ');
        
            $user_one_game_choice =  $this->choice("{$user_one } !, Select game option .. ", 
                            $game_options, $defaultIndex = rand(0,2), $maxAttempts = null,
                            $allowMultipleSelections = false);
            
            $computer_choice = $game_options[array_rand($game_options, 1)];
            
            $game_result = $this->switch_result_outcome($user_one_game_choice, $computer_choice, $user_one);
            
            $this->info($game_result);

            return;
        }

        return;
    }

    private function switch_result_outcome($user_one_value, $user_two_value, $username) : string
    {
        $result = $this->checkGameResultAndReturnOutcome($user_one_value, $user_two_value);

        switch($result){
            case OutcomeEnum::DRAW->value :
                $final_result = 'Game ends in draw';
            break;
            case OutcomeEnum::WIN->value :
                $final_result = "{$username} wins";
            break;
            case OutcomeEnum::LOSE->value :
                $final_result = "{$username} loses";
            break;
        }

        return $final_result;
    }
}
