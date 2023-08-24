<?php

namespace App\Http\Controllers;

use App\Enums\Fruits;

class FruitsController extends Controller 
{
    public function show() 
    {
        $case = Fruits::randomCase();
        echo '隨機選出水果：' . Fruits::toArray('names')[$case] . ' ' . Fruits::toArray('emojis')[$case] . PHP_EOL;
    }
}
