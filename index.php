<?php

require 'base.php';

if (isset($_SESSION['user'])) {
    ?>
    <img src="<?= $_SESSION['user']['avatarUrl'] ?>" alt="Avatar of the user" /> <br>
    Welcome <b><?= $_SESSION['user']['username'] ?></b> ! <br>
    Your email is <a href="#"><?= $_SESSION['user']['email'] ?></a> ! <br>
    <a href="logout.php"><button>Logout</button></a>
    <?php
} else {
    ?>
    You are not logged in ! <br>
    Click here to login : <a href="/authorize.php"><button>Login me!</button></a>
    <?php
}
