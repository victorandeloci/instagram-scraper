<?php

use app\instagramScraper;

require_once('vendor/autoload.php');
require_once('classes/instagramScraper.php');

try {
	$scraper = new instagramScraper('playerselectbr');
	
	echo '<pre>';
	var_dump($scraper->getDatas());
	echo '</pre>';
	
} catch (Exception $e) {
	die($e->getMessage());
}