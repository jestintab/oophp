<?php
// require('person.php');

// $person = new person('Jestin','20');

// //$person->name = "Jestin";

// //$person->age = "20";

// echo $person->sentence();

require('Tweet.php');

$tweet = new Tweet('1','First tweet');

$tweet->tweeting();


 	$tweet->text = 'Setting up my twttr';
echo $tweet->text;	 	
echo isset($tweet->text);