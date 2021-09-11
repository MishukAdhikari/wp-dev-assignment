<?php

namespace Scrappers;

use App\Scrapper;

class RSSFeed extends Scrapper {

    public function get(): string
    {
        return '<p> Some HTML from RSSFeed </p>';
    }
}