<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php
$site_url =  makeShortURL("http://www.cse.lk/corporate_disclosures_more.do/");

echo $site_url;

function makeShortURL($URLToConvert) { 
     $shortURL= file_get_contents("http://tinyurl.com/api-create.php?url=" . $URLToConvert); 
     return $shortURL; 
}

?>
