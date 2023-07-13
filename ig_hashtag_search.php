<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'vendor/autoload.php';
include 'Instagram';
use Instagram\HashtagSearch\HashtagSearch;



//token exp Oct, 3 2022

$config = array( // instantiation config params
    'user_id' => '17841406644008389',
    'access_token' => 'EAAHxLbgPrZBQBANzmbtZAgGH9UEe1y9tcUJGwkdJvP8n6KXFydtWkfTj3sR2ZBMk9HcmYFZAxZABnER34pvPTiEkdtZC6IuRJD0FCh9MDrcBIBCPCLK8oaKc7aTL5zl3qKZBdUTATpZBGi1v1gZCo4XjowmztcsO0FghEoubXfVDi8wZDZD',
);

// instantiate hashtag search
$hashtagSearch = new HashtagSearch( $config );

// get ID for the "developer" hashtag
$hashtagDeveloper = $hashtagSearch->getSelf( 'summerfest2022' );


echo "OK";
?>