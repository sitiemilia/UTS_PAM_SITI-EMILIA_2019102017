<?php
$connect = new mysqli("localhost", "root", "", "dbkaryawan");
if ($connect) {
	echo "Connection Success";
} else {
	echo "Connection Failed";
	exit();
}
