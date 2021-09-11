<?php

namespace App;

abstract class Scrapper {

    protected $url;
    protected $integrationKey;

    public function __construct( string $url, string $integrationKey = null)
    {
        $this->url = $url;
        $this->integrationKey = $integrationKey;
    }

    abstract public function get();
}