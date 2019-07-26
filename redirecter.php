<?php 
require_once('../app/db.php');
$db = new db();
$result = $db -> read_query("SELECT * FROM  `shorturls` WHERE  `short_view` LIKE  '".htmlspecialchars($_GET["shorturl"])."'");
$prom = $result[0]['request_count'] + 1;
$write = $db -> write_query("UPDATE  `u469299_gkkgia`.`shorturls` SET  `request_count` =  '". $prom	 ."' WHERE  `shorturls`.`id` =". $result[0]['id'] .";");
header('Location: http://'.$result[0]["long_view"]) ;
