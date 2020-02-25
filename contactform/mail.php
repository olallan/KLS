<?php

$recepient = "lifeguard-kiev@outlook.com";
$sitename = "Регистрация";

$fname = trim($_POST["fname"]);
$name = trim($_POST["name"]);
$lname = trim($_POST["lname"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "Призвіще: $fname \nІм'я: $name \nПо-батькові: $lname \nТелефон: $phone \nПошта: $email ";

$pagetitle = "\"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");