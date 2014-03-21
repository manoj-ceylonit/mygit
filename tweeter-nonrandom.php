<?
/*
require_once('twitteroauth.php');

$consumer_key = "ExegUS3RWBIi0Qi49YVZyg";
$consumer_secret = "eNw9cxdtydvKpX9cc0q1T7LUGWEMmlOf1A7N7KMVwU";
$access_key = "310694147-ccr26aaJGSR932kFYzTuOmzIesLVKlCsaEZ7LXDM";
$access_secret = "BtGR1ASLGDQk08WvXo3Z9jiBWyGpr3WCXU1lOtvjzaLrc";


date_default_timezone_set('Asia/Colombo');
$tweetContentDate = date('m/d/Y h:i:s a', time());

$f_status = "http://222.165.133.165/tweeter/twitterposts.txt";
$lines = file($f_status);
/*
foreach($lines as $line){
	$tweetContent = $line;

	//$tweetContent = $lines[0];

	$tweet = array('status' => $tweetContent);

	$status = $tweetContent;

	if ($status) {

		$connection = new TwitterOAuth ($consumer_key ,$consumer_secret , $access_key , $access_secret );
	 
		$resultArray = $connection->post('statuses/update', $tweet);

		if ($connection->http_code == 200) {
			error_log('Tweeted: '.$status."\n", 3, "tweeterErrors.log");
			unset($lines[0]);
			$fp = fopen( $f_status, "wa+");
			fwrite($fp, implode($lines));
			fclose($fp);
		} else {
			error_log('Error posting to twitter: '.$resultArray->http_code."\n", 3, "tweeterErrors.log");
		}
	
	echo $tweetContent;

	}
} */
//file_put_contents("/var/www/test/tweeter/twitterposts.txt", "");
$str = " If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).

If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, false will be returned. ";

echo strlen($str); // 7
echo "<br />";
echo $rest = substr($str, 0, 130);
?>
