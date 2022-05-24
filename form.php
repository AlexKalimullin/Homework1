<?php
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db_name = 'test';

		mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];

        $insert_sql = "INSERT INTO users (first_name, last_name)" .
        "VALUES('{$first_name}', '{$last_name}');";
        mysql_query($insert_sql);
?>