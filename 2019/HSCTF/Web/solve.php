<?php
ini_set('max_execution_time', 300);
for($i=0;$i<999999999;$i++)
    if ("0e".$i == hash("md4", "0e".$i))
        echo "0e".$i."    SUCCESS";
?>
