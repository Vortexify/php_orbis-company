<?php 

require "model/company.php";

$profile = new Company();
$profile->name = $_POST["email"];
$profile->vatnumber = $_POST["username"];
$profile->adress = $_POST["firstname"];
$profile->townid = $_POST["lastname"];
?>