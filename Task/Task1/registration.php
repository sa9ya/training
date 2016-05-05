<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <style type="text/css">
        body{
            padding:0;
            margin:0;
            background: #eee;
        }
        #form1{
            width:100%;
            height: 100vh;
        }
        form{
            background: #ccc;
            margin: 100px auto;
            width: 30%;
            text-align:center;
            padding: 1%;
            position: relative;
            border-radius: 10px;
        }
        form input{
            margin-top: 2%;
        }
        input{
            padding: 1%;
            font-size: 1.2em;
        }
        form p{
            font-size:0.9em;
            position: absolute;
            left: 5;
            bottom:0;
        }
        p:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
if($_POST){
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $email = trim($_POST['email']);
    $phoneNumber = trim($_POST['phoneNumber']);

    $eror=false;
    $errortext = "<p><b><font color='red'><h3>При регистрации на сайте произошли следующие ошибки:</h3></font></p><ul>";

if (empty($name)){
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Имя пользователя!</font></li>";
} else {
if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$name))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Имя содержит от 2 до 30 символов и не содержит цифр</font></li>";
}
}
    if (empty($surname))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Фамилия!</font></li>";
} else {
if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$surname))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Фамилия 2 до 30 символов и не содержит цифр</font></li>";
}}
    if (empty($login))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Логин!</font></li>";
}
        if (empty($password))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Пароль!</font></li>";
}
    
        if (empty($confirmPassword))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле подтверждение пароля!</font></li>";
} else {
if ($password == $confirmPassword)
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что пароли совпадают!</font></li>";
}}
    
        if (empty($email)){
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Емейл!</font></li>";
} else {
if (!preg_match("/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,5}\.)?[a-z]{2,4}$/i",$email))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Емейл записан правильно!</font></li>";
}
}
        if (empty($phoneNumber))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле телефон!</font></li>";
} else {
if (!preg_match("/^[0-9]{10,13}$/iu",$phoneNumber))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что номер телефона указан коректно!</font></li>";
}
}
$errortext .= "</ul></b>";
    if($error){
        echo($errortext);
    }else{
        $dbcon=mysql_connect("localhost","root","") or die ("Cant connect to DB");
        mysql_select_db("BaseOfWorkers",$dbcon) or die("Cant find this DB");
    }
    $user=mysql_query("SELECT * FROM Peoples", $dbcon);
    $userData=mysql_fetch_array($user);
    if($login == $userData['Login']){
        exit ("Извините, введённый вами логин уже зарегистрирован.<a href='forma_reg.php'> Введите другой логин</a>.");
    }
    $AddUser = mysql_query("INSERT INTO Peoples (Name, Surname, Login, Password, Email) Values ('$Name','$Surname','$Login','$Password','$Email')",$dbcon);
if (!$AddUser) {echo "Запрос не прошел. Попробуйте еще раз.";}
		if ($AddUser)
		{
	//Выводим сообщение об успешной регистрации.	
		exit ('<div align="center"><br/><br/><br/><h3>
  Вы успешно зарегистрированы на сайте! Заполните форму входа и войдите</h3></div>');
		}
		mysql_close($dbcon);//Закрываем соединение MySQL.
        

if (($_POST && $error) || !$_POST)
{
}
}
?>
</div>



    <div id="form1">
            <form action="" method="post"  class="rf">
    <input type="text" placeholder="Имя" name="name" class="rfield"><br>
    <input type="text" placeholder="Фамилия" name="surname" class="rfield"><br>
    <input type="text" placeholder="Логин" name="login" class="rfield"><br>
    <input type="password" placeholder="Пароль" name="password" class="password rfield"><br>
    <input type="password" placeholder="Повторите пароль" name="confirmPassword" class="conf_pass rfield"><br>
    <input type="email" placeholder="Емейл" name="email" class="mail"><br>
    <input type="text" placeholder="Номер телефона" name="phoneNumber" class="number rfield"><br>
    
<input type="submit" value="Зареестрироватся" class="btn_submit disabled">
    <a href="index.php"><p>Войти</p></a>
            </form>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="required_fields.js"></script>
</body>
</html>