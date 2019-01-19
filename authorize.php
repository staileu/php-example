<?php

require 'base.php';

// redirect the user to the STAILEUAccount authorize url

header('Location: ' . $STAILEUAccounts->getAuthorizeUrl($redirectionUri, [
    // I want to read the profile and the email of the user
    \STAILEUAccounts\Client::SCOPE_READ_PROFILE,
    \STAILEUAccounts\Client::SCOPE_READ_EMAIL
]));
