<html>
<head>
    <meta http-equiv="refresh" content="3; url=../" />
</head>
<body>
<?php 
$DEBUGGING = True;
$TRACECOUNT = 0;
$user="root";
$server="localhost";
$password="ezdine@123";
$dbname="comingsoon";
$connect=mysqli_connect($server,$user,$password,$dbname);
if(!$connect)
{
	die("conection failed");
}
else
{
	$email=$_POST["email"];
	echo "Thanks for subscribing ".$email;
	$s=mysqli_query($connect,"INSERT INTO `comingsoon`.`email`(`id`) VALUES('$email');"); 
}
?>
    <p>You will be redirected back in 3s..</p>
</body>
</html>