<?php
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = 'Google_Client_ID'; 
$clientSecret = 'Google_Client_Secret'; 
$redirectURL = 'http://localhost/login_with_google_using_php/'; //Callback URL

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);