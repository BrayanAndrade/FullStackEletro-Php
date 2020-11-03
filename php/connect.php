<?php 
$servername = "localhost";
$username = "root";
$passwoerd = "";
$database = "produtos";

$conn = mysqli_connect ($servername,$username,$password,$database);

if(!$conn){
    die("A conekão falhou" .mysqli_connect_error)
}
$sql = "select ";
$result = $conn ->query($sql);

print_r($result);
?>