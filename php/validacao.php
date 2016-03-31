<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deadpool";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





    $matricula  = $_POST ['matricula'];
	$nome = $_POST ['nome'];
	$sexo = $_POST ['sexo'];
	$dia = $_POST ['dia'];
	$mes = $_POST ['mes'];
	$ano = $_POST ['ano'];
	$email  = $_POST ['email'];
	$password  = $_POST ['password'];
    $periodo = $_POST ['periodo'];
	$curso = $_POST ['curso'];

	$datanasc = dia."/".mes."/".ano;


	$sql = "INSERT INTO `usuario`(`matricula`, `nome`, `sexo`, `datanasc`, `email`, `senha`, `confirma_senha`, `periodo`, `curso`) 
	VALUES (`null`, '$matricula','$nome','$sexo','$datanasc','$email','$password','$periodo','$curso')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
