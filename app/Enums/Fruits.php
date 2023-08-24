<?php

namespace App\Enums;

use EmreYarligan\EnumConcern\EnumConcern;

enum Fruits: int
{
    use EnumConcern;

    case BANANA = 1;
    case STRAWBERRY = 2;
    case CHERRY = 3;
    case WATERMELON = 4;
    case ORANGE = 5;
    case KIWI = 6;
    case APPLE = 7;

    // Custom methods
    public function emojis(): string
    {
        return match ($this) {
            self::BANANA        => '🍌',
            self::STRAWBERRY    => '🍓',
            self::CHERRY        => '🍒',
            self::WATERMELON    => '🍉',
            self::ORANGE        => '🍊',
            self::KIWI          => '🥝',
            self::APPLE         => '🍎',
        };
    }

    public function names(): string
    {
        return match ($this) {
            self::BANANA        => __('Banana'),
            self::STRAWBERRY    => __('Strawberry'),
            self::CHERRY        => __('Cherry'),
            self::WATERMELON    => __('Watermelon'),
            self::ORANGE        => __('Orange'),
            self::KIWI          => __('Kiwi'),
            self::APPLE         => __('Apple'),
        };
    }
}
