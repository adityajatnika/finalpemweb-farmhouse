<?php

$sname= "localhost";
$uname= "root";
$password = "rahasia";

$db_name = "coba";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

echo "anda berakhir di halaman dbconfig";
