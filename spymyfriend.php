
<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "737405115607482368-8u0xPjVMRW9NpRegSSgRa1oj024X4rr",
    'oauth_access_token_secret' => "TawuMuIUrkkm6EW1bKfEqVUobZDezt1HvUjgPn4L0XB7b",
    'consumer_key' => "hJZPW1GROnq8GCHKpNE6FuLkA",
    'consumer_secret' => "OEMW7YUGhW8Igoe202CcSH7beZhCGk75YyCFuceENgUCjNikHu"
);


$url = 'https://api.twitter.com/1.1/users/show.json';
$getfield = '?screen_name=JamsCenter360';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();     
			 
			 
?>