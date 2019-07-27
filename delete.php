<?php
require_once('../app/auth.php');
$auth = new auth('advanced', 'adminpanel');

require_once('../app/db.php');
$db = new db();

if($auth -> auth_state == true){
	if(isset($_POST["question"]) && $_POST["question"] == "yes"){
		$db->write_query("DELETE FROM `shorturls` WHERE `id` = ".$_POST["id"].";");
		header( 'Location: http://interkim.ru/gkkgia/redirecter/adminpanel.php?s=s' );
	}
	if(isset($_GET["rel"])){
		require_once("inc/templates/head.php");
		require_once("inc/templates/delete_question.php");
		require_once("inc/templates/footer.php");
	}
}