<?php 
 $connect = new mysqli("localhost","root","","dbkaryawan");
 $data       = mysqli_query($connect, "select * from employees");
 $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

 echo json_encode($data);