<?php

require_once('twitteroauth.php');

$consumer_key = "ExegUS3RWBIi0Qi49YVZyg";
$consumer_secret = "eNw9cxdtydvKpX9cc0q1T7LUGWEMmlOf1A7N7KMVwU";
$access_key = "310694147-ccr26aaJGSR932kFYzTuOmzIesLVKlCsaEZ7LXDM";
$access_secret = "BtGR1ASLGDQk08WvXo3Z9jiBWyGpr3WCXU1lOtvjzaLrc";


date_default_timezone_set('Asia/Colombo');
$tweetContentDate = date('m/d/Y h:i:s a', time());

$site_url =  makeShortURL("http://www.cse.lk/corporate_disclosures_more.do/");
$str = "TOUCHWOOD INVESTMENTS - PUBLISHING OF NEW OFFICE PREMISES ADDRESS";
$rest = substr($str, 0, 120);

$tweetContent = $rest .' '. $site_url.' #cse';

$tweet = array('status' => $tweetContent);

$status = $tweetContent;

if ($status) {
 
	$connection = new TwitterOAuth ($consumer_key ,$consumer_secret , $access_key , $access_secret );
 
	$resultArray = $connection->post('statuses/update', $tweet);

	if ($connection->http_code == 200) {
		error_log('Tweeted: '.$tweetContent." on ".$tweetContentDate."\n", 3, "tweeterErrors.log");
	} else {
		error_log('Error posting to Twitter: '.$resultArray->http_code." on ".$tweetContentDate."\n", 3, "tweeterErrors.log");
	}

echo $tweetContent;

}


function makeShortURL($URLToConvert) { 
     $shortURL= file_get_contents("http://tinyurl.com/api-create.php?url=" . $URLToConvert); 
     return $shortURL; 
}


?>


