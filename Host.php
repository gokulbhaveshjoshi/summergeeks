<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$host=$_POST['host'];
$in = $_POST["in"];
$out = $_POST["out"];
$address= $_POST["address"];
$msg = " Name: ".$name."</br> Phone : ".$phone."</br> Check-In: ".$in."<br> Check-Out: ".$out."<br> Host Name :".$host."<br> Address: ".$address;
$msg = wordwrap($msg,150);
mail($mail,"My subject",$msg);
?>