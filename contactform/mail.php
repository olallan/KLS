<?php

$recepient = "lifeguard-kiev@outlook.com";
$sitename = "�����������";

$fname = trim($_POST["fname"]);
$name = trim($_POST["name"]);
$lname = trim($_POST["lname"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "�������: $fname \n��'�: $name \n��-�������: $lname \n�������: $phone \n�����: $email ";

$pagetitle = "\"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");