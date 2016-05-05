<?php
    $dirct="new";
    $hdl=opendir($dirct);
    while($file = readdir($hdl))
    {
        if(($file!=".")&&($file!=".."))                     $a[]=$file;
    }
    closedir($hdl);
    rsort($a);
    foreach($a as $value){
        echo ("<a href= $dirct/$value>$value</a><br>");
        include("$dirct/$value");
        $m=get_meta_tags("$dirct/$value");
        echo "<a href=$dirct/$value>$m[zagol]</a> $m[author]<br>";
    }
?>