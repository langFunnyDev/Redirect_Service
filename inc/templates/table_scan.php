<?php
$result = $db->read_query("SELECT * FROM  `shorturls`");
foreach($result as $r){
	echo("<tr>");
		echo("<td>");
			echo($r['id']);
		echo("</td>");
		echo("<td>");
			echo($r['long_view']);
		echo("</td>");
		echo("<td>");
			echo($r['short_view']);
		echo("</td>");
		echo("<td>");
			echo($r['request_count']);
		echo("</td>");
	echo("</tr>");
}