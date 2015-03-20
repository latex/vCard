<?php

include "app/utils/autoload.php";
$user = new UserModel();

$user->name = leandro;

echo $user->name;