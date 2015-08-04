<?php

$name   = $_REQUEST["name"];
$email  = $_REQUEST["email"];
$gender = $_REQUEST["gender"];
$age    = $_REQUEST["age"];
$comments = $_REQUEST["comments"];

echo "Name:     ".$name."<br/>";
echo "Email:    ".$email."<br/>";
echo "Gender:   ".$gender."<br/>";
echo "Age:      ".$age."<br/>";
echo "Comments: ".$comments;

?>