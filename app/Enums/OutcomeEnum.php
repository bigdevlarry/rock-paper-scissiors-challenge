<?php

namespace App\Enums;

enum OutcomeEnum: string
{
    case WIN = 'Win';
    case LOSE = 'Lose';
    case DRAW = 'Draw';
}