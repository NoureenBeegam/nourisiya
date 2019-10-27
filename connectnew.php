<?php
$mysql= new mysqli('localhost','root','','mysql');

if($mysql->connect_error)
	{die("connection failed".$con->connect_error);
}

$fname = $_POST['fname'];
$lname= $_POST['lname'];
$code = $_POST['code'];
$num = $_POST['mnumber'];
$id = $_POST['mail'];
$pass = $_POST['pass'];
$pass2 = $_POST['rpass'];
$gen = $_POST['Gender'];
$Bday = $_POST['Birthday'];

if ($pass===$pass2)

{
	if ($gen==="Select") 
	{
		die('enter gender');
	}
  
	$sql =  "INSERT INTO form (fname,lname,code,mnumber,mail,Bday,pass,rpass,Gender) VALUES ('$fname','$lname','$code','$num','$id','$Bday','$pass','$pass2','$gen')";

    if($mysql->query($sql)===TRUE)
	{
		echo "new record created";
	}
    else
    {
	echo "error";
    }
}
else
{
	echo "enter same password for both fields";

}

$mysql->close();
?>