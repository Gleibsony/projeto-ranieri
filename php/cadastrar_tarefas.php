<head>
        <title>Cadastrar Tarefas</title>
</head>
<div>
    <form method="POST" action="validacao-tarefas.php">
        <fieldset>
            <legend>Cadastre sua tarefa</legend>
            <label>Titulo</label>
            <input type="text" name="titulo" required>
            <label>Descrição</label>
            <textarea name="descricao" cols="25" rows="10"></textarea>
            <label>Data</label>
            <input type="date" name="data" required>
        </fieldset>
            <input type="submit" name="submit" id="submit">
    </form>
</div>      