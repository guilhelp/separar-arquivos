<?php

require_once 'vendor/autoload.php';

use App\Src\Login;

$login = new Login();
$login -> executar('eu', '123');