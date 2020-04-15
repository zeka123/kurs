




<html>

<form action="online.php" method="post">

<head>

                                        </head>
</html>
<?PHP
$login = $_POST['login'];
$pass  = $_POST['password'];


$url="http://htmlweb.ru/api/mnp/phone/";
$url_1="?api_key=9e844552f6fe751fbe01b99dca06e743";
$url=$url.$login;
$url=$url.$url_1;
$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL,$url );
$responce=curl_exec($curl);
$data= json_decode($responce, true);
curl_close($curl);
 $arr = explode(' ', $responce);
$result=count($arr);

if($result<25){
header('Location: /error.php');
die();
}




if ($login== ""){
header('Location: /error.php');
die();
}
if($pass==""){
header('Location: /error.php');
die();
}




$pass=password_hash($pass,PASSWORD_BCRYPT );

$mysql=new mysqli('localhost','root','123','turn');

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












