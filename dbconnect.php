<?php
try{
    $db = new PDO('mysql:
    dbname=mini_bbs;
    host=localhost;
    charset=utf8',
    'root',
    'root', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
}catch(PDOException $e){
    echo 'DB接続エラー: ' . $E->getMessage();
}

$db->query("SELECT wrongcolumn FROM wrongtable");
?>