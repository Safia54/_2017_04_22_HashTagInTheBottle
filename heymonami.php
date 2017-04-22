
<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "737405115607482368-8u0xPjVMRW9NpRegSSgRa1oj024X4rr",
    'oauth_access_token_secret' => "TawuMuIUrkkm6EW1bKfEqVUobZDezt1HvUjgPn4L0XB7b",
    'consumer_key' => "hJZPW1GROnq8GCHKpNE6FuLkA",
    'consumer_secret' => "OEMW7YUGhW8Igoe202CcSH7beZhCGk75YyCFuceENgUCjNikHu"
);

// Your specific requirements
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=#crisiscenterbe&result_type=recent';

// Perform the request
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
			 
			 
?>