<?php

require 'vendor/autoload.php';

// CHANGE ME!
// CHANGE HERE THE APP ID, APP SECRET AND THE REDIRECTION URI
$appId = "YOUR_APP_ID";
$appSecret = "YOUR_APP_SECRET";
$redirectionUri = "http://localhost:80/execute.php";

// start the session
session_start();

// declare a global variable for the Client main class
$STAILEUAccounts = new \STAILEUAccounts\Client($appId, $appSecret);
