<?php

namespace Scrappers;

use App\Scrapper;

class Url extends Scrapper {

    public function get(): string
    {
        return '<p> Some HTML From URL </p>';
    }
}