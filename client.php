<html>
<head>
<title>Topic</title>
</head>
<body><form action="client.php" method="post">
<pre>
NAME         : <input type="text" name="name">
Phone Number : <input type = "number" name="phone">
Email Id     : <input type = "text" name= "email">
CheckIn      : <input type="time" name = "in">
CheckOut     : <input type = "time" name = "out"></br>
     <input type="submit" value="SAVE INFORMATION" >
<pre>
</form>
</body>
</html>
<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$in = $_POST["in"];
$out = $_POST["out"];
$msg = " Name: ".$name."</br>Email: ".$email."</br> Phone : ".$phone."</br> Check-In: ".$in."<br> Check-Out: ".$out;
$msg = wordwrap($msg,120);
mail("vs@xyz.com","My subject",$msg);
$api = new TextMagicAPI(array("username"=>"your_user_name","password"=>"your_api_password"));
$phone=array();
$is_unicode=true;
$api->send($msg,$phone,$is_unicode);
?>