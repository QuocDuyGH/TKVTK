<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppc";



// tao cau lenh ket noi
$conn = mysqli_connect($servername, $username, $password);

// kiem tra cau lenh ket noi voi my sql
if(!$conn){
    die("failed connect: ".mysqli_connect_error());
}else{
    mysqli_select_db($conn,$dbname);
}
?>