<?php
require_once('../app/auth.php');
$auth = new auth('advanced', 'adminpanel');

require_once('../app/db.php');
$db = new db();

if($auth -> auth_state == true){
	if(isset($_GET["rel"])){
		$result = $db -> read_query("SELECT * FROM  `shorturls` WHERE  `id` LIKE  '".$_GET["rel"]."'");
		$id = $result[0]["id"];
		$short_url = $result[0]["short_view"];
		$long_url = $result[0]["long_view"];
		require_once("inc/templates/head.php");
		require_once("inc/templates/edit_form.php");
		require_once("inc/templates/footer.php");
	}
	if(isset($_POST["id"])){
		$http = "http://";
		$https = "https://";
		$flag = false;
		$result = $db->read_query("SELECT * FROM  `shorturls`");
		foreach($result as $r){
			if($_POST["short_url"] == $r["short_view"]){
				$flag = true;
				header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=f') ;				
			}
		}
		if($flag == false){
			if(startsWith($_POST['long_url'], $http)){
				$true_url = substr($_POST['long_url'], 7);
				$write = $db -> write_query("UPDATE  `u469299_gkkgia`.`shorturls` 
											SET  `short_view` =  '".htmlspecialchars($_POST["short_url"])."',`long_view` =  '".htmlspecialchars($true_url)."'
											WHERE  `shorturls`.`id` =".htmlspecialchars($_POST["id"]).";");
				header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=s') ;
			} elseif (startsWith($_POST['long_url'], $https)){
				$true_url = substr($_POST['long_url'], 8);
				$write = $db -> write_query("UPDATE  `u469299_gkkgia`.`shorturls` 
											SET  `short_view` =  '".htmlspecialchars($_POST["short_url"])."',`long_view` =  '".htmlspecialchars($true_url)."'
											WHERE  `shorturls`.`id` =".htmlspecialchars($_POST["id"]).";");
				header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=s') ;
			} else {
				$write = $db -> write_query("UPDATE  `u469299_gkkgia`.`shorturls` 
											SET  `short_view` =  '".htmlspecialchars($_POST["short_url"])."',`long_view` =  '".htmlspecialchars($_POST["long_url"])."'
											WHERE  `shorturls`.`id` =".htmlspecialchars($_POST["id"]).";");
				header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=s') ;
			}
		}
	}
	
}

function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 