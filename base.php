<?php

require 'vendor/autoload.php';

// CHANGE ME!
// CHANGE HERE THE APP ID, APP SECRET AND THE REDIRECTION URI
$appId = "ZIR7blbDfmFjavbl";
$appSecret = "MTMuEMyeukICIkfWdmVpn6P9UJMwrgZ0";
$redirectionUri = "http://localhost:80/execute.php";

// start the session
session_start();

// declare a global variable for the Client main class
$STAILEUAccounts = new \STAILEUAccounts\Client($appId, $appSecret);
