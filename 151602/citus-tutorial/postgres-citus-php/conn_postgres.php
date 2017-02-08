<?php

	$host = "10.151.22.90";
	$username = "postgres";
	$password = "postgres";
	$db ="postgres";

	$con = pg_connect("host=$host dbname=$db user=$username password=$password")
	or die("Could not connect to server\n");

	

	$query = 'Set citus.task_executor_type to "task-tracker";
			  SELECT * FROM a, b where a.a_id = b.a_id';

	$rs = pg_query($con, $query) or die("Cannot execute query\n");

	while ($row = pg_fetch_row($rs)) {
		echo "$row[0] $row[1]\n";
		echo PHP_EOL;
	}

	pg_close($con);
?>