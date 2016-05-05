<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вход</title>
    <style type="text/css">
        body{
            padding:0;
            margin:0;
        }
        #form1{
            width:100%;
            height: 100vh;
        }
        form{
            margin: 200px auto;
            background: #34a;
            width: 30%;
            text-align:center;
            padding: 1%;
            position: relative;
            border-radius:10px;
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
        p{color: #fff;}
        p:hover{text-decoration:underline;}
    </style>
</head>
<body>
    <div id="form1">
            <form action="chek.php" method="post" name="autoriz" class="rf">

<input type="text" placeholder="Логин" name="login" id="log" class="rfield"><br>

                <input type="password" placeholder="Пароль" name="password" id="pas" class="rfield"><br>
                
<input type="submit" value="Войти" name="submit" class="btn_submit disabled">
                <a href="registration.php"><p>Регистрация</p></a>
            </form>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="required_fields.js"></script>
</body>
</html>