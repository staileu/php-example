<?php

require 'base.php';

// This is the page where the user will be redirected after he accepted your application

$code = $_GET['code'];

// verify if the code is correct/valid
if ($STAILEUAccounts->verify($code)) {
    // fetch the user before accessing the user's data
    $STAILEUAccounts->fetchUser();
    $_SESSION['user'] = [
        'username' => $STAILEUAccounts->getUser()->username,
        'email' => $STAILEUAccounts->getUser()->email,
        'avatarUrl' => $STAILEUAccounts->getUser()->avatarUrl
    ];
    header('Location: /index.php');
} else {
    ?>
    Error: Invalid STAIL.EU code/token, but you can retry here: <a href="/authorize.php"><button>Retry</button></a>
    <?php
}
