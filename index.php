<?php
include("classes/person.php");
include("classes/user.php");
include("classes/student.php");

$oPerson = new user();
$oPerson->whoAmI("Bob");
$oPerson->logout();

$oPerson = new student();
$oPerson->whoAmI("Jill");
?>