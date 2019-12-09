<?php

$SERVER = "127.0.0.1"
$USERNAME = "127.0.0.1"
$PASSWORD = "127.0.0.1"
$DATABASE = "127.0.0.1"

$conn = new myslqi($SERVER, $USERNAME, $PASSWORD, $DATABASE)

if (mysql_connect_errno()){
	echo "Failed to connect to MYSQL DATABASE SERVER".mysqli_connect_error();
}


?>