<?php

// We need to scrap HTML from any URL, RSS Feed and YouTubeVideo

require __DIR__ . '/vendor/autoload.php';

use Scrappers\Url;
use Scrappers\RSSFeed;
use Scrappers\YoutubeVideo;

// Get HTML from url
(new Url('https://wpdeveloper.net/posts-carousel-feature-best-blog/'))->get();

// Get HTML from RSS Feed
(new RSSFeed('https://wpdeveloper.net/feed'))->get();

// Get HTML from YouTube video
(new YoutubeVideo('https://www.youtube.com/watch?v=la0ZtnqX6zQ', 'youtube_api_key'))->get();