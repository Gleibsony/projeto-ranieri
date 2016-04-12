<?php
session_start();
?>
<html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php 
			 if(!isset($_SESSION['usuario'])){
		  ?>
            <img src="imagen/usuario.png">
            <form method="POST" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-input">
                    <input type="text" name="email" id="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="form-input">
                    <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" required>
                    </div>
                    <input type="submit" id="enviar" name="submit" value="Entrar" class="btn-login"><br/>
                    <a href="php/cadastro.php">Não é cadastro? Registre-se Gratis</a>
            </form>
    </div>
</body>
</html>


    <?php
            }
        if(isset($_POST['submit'])){
           $server = "localhost";
	       $username = "root";
	       $password = "";
	       $dbname = "lumia";
        
            $email = $_POST['email'];
            $pass = md5($_POST['senha']);
	
	$link = mysqli_connect ($server, $username, $password, $dbname);
            
             $query= "SELECT `email`, `senha` FROM `usuario`WHERE email = '$email' AND senha = '$pass'";
                //SELECT `matricula`, `nome`, `sexo`, `datanasc`, `curso`, `periodo`, `email`, `senha`, `id` FROM `usuario` WHERE 1
                $result = mysqli_query($link, $query);
                
                
            if($result){
                $row = mysqli_num_rows($result);
                if($row != 0){
                    header("location:php/home.php");    
            }
                
                
                    
                }
            }
        
    ?>