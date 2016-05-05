<?php
    $dbcon=mysql_connect('localhost','root','') or die("Cant connect to mysql");
mysql_select_db('BaseOfWorkers',$dbcon) or die("Cant chose db1");

$p=mysql_query("");
echo "Все пользователи:<br><table>";
    echo "<tr><td>Name</td><td>Phone</td></tr>";
do{
    echo "<tr><td>".$phone['name']."</td>";
    echo "<td>".$phone['Phone']."</td></tr>";
  }
    while($phone=mysql_fetch_array($p));
echo "</table>";

?>