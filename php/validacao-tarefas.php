<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bd = "lumia";

    $conn = new mysqli($servername, $username, $password, $bd);

    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        
        $sql = "INSERT INTO `tarefas`(`titulo`, `descricao`, `data`) VALUES ('$titulo', '$descricao', '$data')";

    if($conn->query($sql) == TRUE){
        
    }else{
        echo "Error: ". $sql. "<br>". $conn->error;
    }
    
    $conn->close();
?>
