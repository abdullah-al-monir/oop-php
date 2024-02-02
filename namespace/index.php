<?php




require_once("user.php");

use App\User;

$user = new User();
$user->get();
