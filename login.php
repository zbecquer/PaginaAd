<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bd_truck";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("No hay Conexion: ".mysqli_connect_error());
}

$email = $_POST["email"];
$pass = $_POST["pwd"];

$query = mysqli_query($conn, "SELECT * FROM logins WHERE email = '".$email."' and
password = '".$pass."' ");

$nr = <mysqli_num_rows($query);
if($nr == 1){
    echo "Bienvenido" .$email
}else if ($nr == 0){
    echo "No ingreso";
}

?>