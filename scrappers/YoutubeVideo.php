<?php

namespace Scrappers;

use App\Scrapper;
use Contracts\RequiresIntegration;

class YoutubeVideo extends Scrapper implements RequiresIntegration {

    public function get(): string
    {
        if (!$this->verifyIntegration()) return '';

        return '<p> YouTube Video with HTML </p>';
    }

    public function verifyIntegration() : bool
    {
        //TODO:: Write verification logic using $this->integrationKey

        return true;
    }
}