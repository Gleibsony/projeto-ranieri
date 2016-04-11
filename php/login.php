    <div id="formulario">
        <?php 
			if(!isset($_SESSION['usuario'])){
		?>
        <form method="POST" action="?go=logar">
            <fieldset>
                <legend>Login</legend>
                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
            </fieldset>
            <button type="submit" id="enviar">Enviar</button>
            <a href="php/cadastro.php">Não é cadastro? Registre-se Gratis</a>
        </form>
    </div>
    <?php
            }
        if(@$_GET['go'] == "logar"){
            $user = $_POST['usuario'];
            $pass = $_POST['senha'];
            
            if(empty($user)){
                echo "<script>alert('Preencha todos os campos para logar,); histori.back();</script>";
            }
            elseif(empty($pass)){
                echo "<script>alert('Preencha todos os campos para logar,); histori.back();</script>";
            }else{
                $query1 = mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE usuario = '$user' AND senha = '$pass'"));
                if($query1 == 1){
                    echo "<script>alert('usuario logado com sucesso'); history.back();</script>";
                }
            }
        }
    ?>