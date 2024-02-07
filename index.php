<?php

	use app\instagramScraper;
	
	require_once("vendor/autoload.php");
	require_once("classes/instagramScraper.php");
	
	$account = 'playerselectbr'; // ex: feliciaday -> https://instagram.com/feliciaday
	
	try {
		$scraper = new instagramScraper($account);
		
		echo '<pre>';
		var_dump($scraper->getDatas());
		echo '</pre>';
		
	} catch (Exception $e) {
		die("<strong style='color:red'>ERROR</strong> : " . $e->getMessage());
	}