<?php
include '../classes/User.php';

#cerate an object
$user = new User;

#call the method
$user->store($_POST);  //$_POST hold our data from the registration form
?>