<?php
require_once('../app/auth.php');
$auth = new auth('advanced', 'adminpanel');

require_once('../app/db.php');
$db = new db();

if($auth -> auth_state == true){
	require_once("inc/templates/head.php");
	if($_GET["role"] == "add"){
		require_once("inc/templates/add_form.php");
	} elseif ($_GET["role"] == "view"){
		require_once("inc/templates/table_head.php");
		require_once("inc/templates/table_scan.php");
		require_once("inc/templates/table_footer.php");
	} 
	if ($_GET["s"] == "f"){
		require_once("inc/templates/add_error.php");
	} 
	if ($_GET["s"] == "s"){
		require_once("inc/templates/add_success.php");
	}
	require_once("inc/templates/footer.php");
}