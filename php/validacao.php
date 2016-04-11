<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "lumia";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

    $matricula  = $_POST['matricula'];
    $nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $email  = $_POST['email'];
	$senha  = md5($_POST['senha']);
    $periodo = $_POST['periodo'];
	$curso = $_POST['curso'];
    $datanasc = $dia."/".$mes."/".$ano;

   $sql = "INSERT INTO `usuario`(`matricula`, `nome`, `sexo`, `datanasc`, `curso`, `periodo`, `email`, `senha`) VALUES ('$matricula','$nome','$sexo','$datanasc','$curso','$periodo','$email','$senha')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>