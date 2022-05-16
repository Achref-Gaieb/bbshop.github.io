<?php
require_once './App/Entity/User.php';
require_once './App/Manager/Manager_user.php';
//On indique le nom des espace utilisé.
use App\Entity\User;
use App\Manager\Manager_user;

$Manage_user= new Manager_User();

$newUser = new User();
$newUser->setFirstname($_POST['firstname'])
->setLastname($_POST['lastname'])
->setMail($_POST['mail'])
->setPassword($_POST['password'])
->setNumero($_POST['numbers']);
var_dump($newUser);
$user = $Manage_user->REGISTER($newUser);
