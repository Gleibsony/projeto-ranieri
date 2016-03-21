<html>
    <head>
        <title>Cadastro Usuario</title>
    </head>
    <body>
        <form name="meuForm" method="POST" id="formulario">
            <div>
                <fieldset>
                    <legend>Dados Pessoais</legend>
                    <div>
                        <label for="Nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo">
                            <option value="empty">Selecione</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Login e Senha</legend>
                    <div>
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div>
                        <label for="password">Senha</label>
                        <input type="password" name="password"id="password"
                    </div>
                    <div>
                        <label for="confirm-password">Confirmar Senha</label>
                        <input type="password" name="confirm-password" id="password">
                    </div>
                </fieldset>
            </div>
        </form>
    </body>
</html>