<?php
$file = 'counter.txt';
if(!file_exists($file)){
    $fopen = fopen($file,"w");
    fwrite($fopen,0);
    fclose($fopen);
}
if(!isset($_COOKIE['count'])){
    $content = file_get_contents($file);
    $val = $content + 1;
    $put = file_put_contents($file, $val);
    setcookie('count',$val,time()+2);
}
?>

