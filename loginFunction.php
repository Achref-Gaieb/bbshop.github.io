<?php
require_once './App/Entity/User.php';
require_once './App/Manager/Manager_user.php';
//On indique le nom des espace utilisé.
use App\Entity\User;
use App\Manager\Manager_user;

$Manage_user= new Manager_User();

$user = $Manage_user->LOGIN($_POST['login'],$_POST['password']);
var_dump($user);