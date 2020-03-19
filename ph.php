




<html>

<form action="online.php" method="post">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

                                        </head>
</html>
<?PHP
$login = $_POST['login'];
$pass  = $_POST['password'];







if ($login== ""){
header('Location: /error.php');
die();
}
if($pass==""){
header('Location: /error.php');
die();
}




$pass=password_hash($pass,PASSWORD_BCRYPT );

$mysql=new mysqli('localhost','root','','turn');

$result=$mysql->query ("SELECT*  FROM `start` WHERE  `login` = '$login'");


$user=$result-> fetch_assoc();
if($user!=null){
 header('Location: /error.php');
die();
}





$mysql->query("INSERT INTO `start` (`login`,`password`,`status`)
VALUES('$login','$pass','online')");
$mysql->close();

setcookie ("password",$pass,time()+4999*999);
setcookie ("login",$login,time()+999*999);

session_start();
$_SESSION["login"]=$login;
header('Location: /online.php');
?>












