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
			echo('<a href="http://interkim.ru/gkkgia/redirecter/'.$r['short_view'].'">'.$r['short_view'].'</a>');
		echo("</td>");
		echo("<td>");
			echo($r['request_count']);
		echo("</td>");
		echo("<td>");
			echo('<a href="edit.php?rel='.$r["id"].'">Изменить</a>');
			echo("<br>");
			echo('<a href="delete.php?rel='.$r["id"].'">Удалить</a>');
		echo("</td>");
	echo("</tr>");
}