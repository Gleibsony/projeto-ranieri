<html>
    <head>
        <title>Formulario</title>
        <link type="text/css" href="../css/style.css">
    </head>
    <body>
    <div class="">
        <form method="POST" accept-charset="utf-8" class="form-group" action="validacao.php" id="formulario">
            <fieldset class="grupo">
                <legend>Dados Pessoais</legend>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="campo">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo">
                        <option value="select">selecione</option>
                        <option value="f">Feminino</option>
                        <option value="m">Masculino</option>
                    </select>
                </div>
                <div class="">
                        <label for="datanasc">Data de nascimento</label>
                        <select name="dia">
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="mes">
                            <option value="01">Janeiro</option>
                            <option value="02">Fevereiro</option>
                            <option value="03">Março</option>
                            <option value="04">Abril</option>
                            <option value="05">Maio</option>
                            <option value="06">Junho</option>
                            <option value="07">Julho</option>
                            <option value="08">Agosto</option>
                            <option value="09">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezenbro</option>
                        </select>
                        <select name="ano">
                            <option value="ano">Ano</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                        </select>
                    </div>
            </fieldset>
            <fieldset class="grupo">
                <legend>Curso</legend>
                <div class="campo">
                    <label for="matricula">Matricula</label>
                    <input type="text" name="matricula" id="matricula">
                </div>
                <div class="campo">
                    <label for="periodo">Periodo</label>
                    <select name="periodo" id="periodo">
                        <option value="periodo">Periodo</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="grupo">
                <legend>Login e Senha</legend>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="campo">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="campo">
                    <label for="confirm-password">Confirma senha</label>
                    <input type="password" name="confirm-password" id="confirm-password">
                </div>
            </fieldset>
            <button type="submit" id="submit">Enviar</button>
        </form>
    </div>
    </body>
</html>