<?php
$dirtemp = explode('/',str_replace('\\', '/', $d));
$num = 0;
for ($i=0; $i < count($dirtemp); $i++) { 
    if ($dirtemp[$i] === "src"){
        $num = $i + 1;
    }
 }
$num = count($dirtemp) - $num;
global $dir;
$dir = "";
for ($i=0; $i < $num; $i++) { 
    $dir = $dir . "../";
}
?>