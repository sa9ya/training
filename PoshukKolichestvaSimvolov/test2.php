<?php
$text="If you can find how many.";
$times=0;
for ($a=0;$a<=strlen($text);$a++)
{
    if (strstr($text[$a],'i') || strstr($text[$a],'I'))
    {
        $times++;
    }
}
echo $times;
?>