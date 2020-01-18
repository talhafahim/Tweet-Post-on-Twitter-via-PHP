<?php
	//Twitter Api
$consumerKey    = 'cRZtROAncwd9oeZaKWUralaSY';
$consumerSecret = 'hb9jlxnKqc255auT6rvW9cDjxLo9nk5J2BEMBgqDJi92MEP4Mr';
$oAuthToken     = '900349322042249216-Yv1ewox7yTDA0l3dqX9ESe1EPU4OX7l';
$oAuthSecret    = 'j2ukk9pFXVaBTNfAaWfBU0BsONQ4Hlt3LcFsy9lKXHWji';

# API OAuth
require_once('twitteroauth.php');
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

$msg="Hello Talha Fahim.This is private msg from PHP";
// send private message
 $tweet->post('direct_messages/new', array('screen_name' => 'TalhaFahim6', 'text' => $msg));
echo "Message <br>";


// New Tweet message
$tweetMessage = 'Hello Talha. This is tweet from PHP';

// Check for 140 characters
if(strlen($tweetMessage) <= 140)
{    
   echo  $tweet->post('statuses/update', array('status' => $tweetMessage));
}
echo "Tweet was sent";
?>
