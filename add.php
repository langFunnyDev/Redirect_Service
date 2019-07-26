<?php
require_once('../app/auth.php');
$auth = new auth('advanced', 'adminpanel');

require_once('../app/db.php');
$db = new db();

if($auth -> auth_state == true){
	$flag = false;
	if(isset($_POST)){
		$result = $db->read_query("SELECT * FROM  `shorturls`");
		foreach($result as $r){
			if($_POST["short_url"] == $r["short_view"]){
				$flag = true;
				header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=f') ;				
			}
		}
		if($flag == false){
			$db->write_query("INSERT INTO  `u469299_gkkgia`.`shorturls` (`id` ,`short_view` ,`long_view` ,`request_count`)
							  VALUES (NULL ,  '".$_POST['short_url']."',  '".$_POST['long_url']."',  '0');");
			header('Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=s') ;
		}
	}
	
}