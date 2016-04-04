<?php
$servername = "localhost";
$username = "lumia";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

    $matricula  = $_POST ['matricula'];
    $nome = $_POST ['nome'];
	$sexo = $_POST ['sexo'];
    $email  = $_POST ['email'];
	$password  = $_POST ['password'];
    $periodo = $_POST ['periodo'];
	$curso = $_POST ['curso'];
    $datanasc = $nasc_dia."/".$nasc_mes."/".$nasc_ano;

   $sqlInsert = INSERT INTO `usuario`(`matricula`, `nome`, `sexo`, `datanasc`, `curso`, `periodo`, `email`, `senha`, `id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>