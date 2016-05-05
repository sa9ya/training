<?php
$a='+38(098) 45 95 345';
echo substr_replace($a,'***',strlen($a)-3)."<br>". 'Is this your phone number?';
?>