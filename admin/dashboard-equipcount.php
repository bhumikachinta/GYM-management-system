<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gymnsb";

$conn=mysqli_connect($servername,$uname,$pass,$db,"3308");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM equipment";
                $query = $conn->query($sql);

                echo "$query->num_rows";
                
?><!-- Visit codeastro.com for more projects -->