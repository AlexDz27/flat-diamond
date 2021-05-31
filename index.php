<?php

require_once 'vendor/autoload.php';

$scraper = new \spekulatius\phpscraper();

$scraper->go('https://test-pages.phpscraper.de/links/rel.html');

$firstLink = $scraper->linksWithDetails[0];

var_dump($firstLink);