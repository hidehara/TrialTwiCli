<?php

// ref. http://docs.guzzlephp.org/en/latest/

require_once 'vendor/autoload.php';
use Guzzle\Http\Client;

include __DIR__ . '/twitter-auth.php';


//$client = new Client('https://api.github.com');
//$request = $client->get('/user')->setAuth('user','pass');
//
//$response = $request->send();
//
//echo $response->getBody();
//echo $response->getHader('Content-Length');
//


//// Configuration ////
$client = new Client('https://api.twitter.com/{version}', array(
	'version' => '1.1'
));

$client->addSubscriber(new Guzzle\Plugin\Oauth\OauthPlugin(
	$twitterauth
));


//// Get a status ////
echo $client->get('statuses/user_timeline.json')->send()->getBody();


//// Post a status ////
//$request = $client->post('statuses/update.json', null, array(
//	'status' => 'Tweeted with Guzzle, http://guzzlephp.org'
//));
//
//$data = $request->send()->json();
//echo $data['text'];
//

