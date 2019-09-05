<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Bedroom',
            3,
            1,
            'thirdRoom',
            false
        );
    }
}