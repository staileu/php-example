<?php

require 'base.php';

unset($_SESSION['user']);

header('Location: /index.php');
