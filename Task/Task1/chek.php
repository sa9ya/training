<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

if(isset($_POST['login'])){
$login = $_POST['login'];
if($login ==''){
unset($login);
}}
if(isset($_POST['password'])){
    $password = $_POST['password'];
if($password ==''){
unset($password);
    }}

if(empty($login) || empty($password)){
    exit ("<body><div align='center'><br/><br/><br/><h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!" . "<a href='index.php'> <b>Назад</b> </a></h3></div></body>");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$dbcon = mysql_connect("localhost","root","");
mysql_select_db('BaseOfWorkers',$dbcon);
if (!$dbcon){
    echo "Невозможно подключится к базе данных".mysql_error(); exit;
}
$user = mysql_query("SELECT * FROM Peoples WHERE Login='$login'", $dbcon) or die('Ytd');
$userData = mysql_fetch_array($user);
if(empty($userData['Password'])){
    exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами login или пароль неверный." . "<a href='index.php'> <b>Назад</b> </a></h3></div></body>");
}else{    
    if($userData['Password']==$password){
        echo("<p>You enter on this page</p>");
    }else{         
        exit ("<body><div align='center'><br/><br/><br/>
	<h3>Извините, введённый вами login или пароль неверный." . "<a href='index.php'> <b>Назад</b> </a></h3></div></body>");

    }
}
?>