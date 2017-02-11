<?php 
require_once 'swift/lib/swift_required.php';
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
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('test4generalpurpose@gmail.com')
  ->setPassword('gmggmggmg');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('test4generalpurpose@gmail.com' => 'ABC'))
  ->setTo(array('$email'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message); 
}
?> 

