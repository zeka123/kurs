
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">


<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha384-LS4/wo5Z/8SLpOLHs0IbuPAGOWTx30XSoZJ8o7WKH0UJhRpjXXTpODOjfVnNjeHu" crossorigin="anonymous">
<meta charset="utf-8"/>
<style type="text/css">
body {
background-image: url(https://w-dog.ru/wallpapers/13/6/376765897042485.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title> laba </title>

<font color="red"> неверное имя и фамилие преподавателя или логин </font>
<h1> HELLO </h1>

 <form  action = "add.php" method="POST" >
     <h2>  имя и фамилие преподавателя  </h2>
     <input name = "login">            </input>

    <h2> Введите пароль</h2>
    <input name = "password"  type = "password">      </input>
    <p><input type="submit" value=" войти  "    />  </p>
<p> <h3> Нет аккаунта ?  </h3></p>

<?php
echo '<input type="Submit"   value="зарегестрироваться" onclick="window.location.href=\'registrator.php\'; return false;" >';
?>


</head>
<body>
</body>
</form>
</html>