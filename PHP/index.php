<html>
<head>
    <title>php</title>
</head>
<body>
    <?php
    $array = array();
    for ($i=1; $i<=100; $i++)
    {
        $array[$i]=$i;
        if (($array[$i]%3==0) && ($array[$i]%12!==0))
        {
            echo $array[$i]."<br>";
        }
    }
    ?>
</body>
</html>