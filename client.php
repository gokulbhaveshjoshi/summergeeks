<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$in = $_POST["in"];
$out = $_POST["out"];
$msg = " Name: ".$name."<br>Email: ".$email."<br> Phone : ".$phone."<br> Check-In: ".$in."<br> Check-Out: ".$out;
$msg = wordwrap($msg,120);
mail("vs@xyz.com","My subject",$msg);
$api = new TextMagicAPI(array("username"=>"your_user_name","password"=>"your_api_password"));
$phone=array(00000000);
$is_unicode=true;
$api->send($msg,$phone,$is_unicode);
?>