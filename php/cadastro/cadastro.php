<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Organizador de Tarefas</title>
</head>
<body>
    <h1>CADASTRO</h1>
    <form action="receive_form.php" method="POST">
        <div>Nome: <input type="text" name="nome" id=""></div>
        <div>E-mail: <input type="email" name="email" id=""></div>
        <div>Senha: <input type="password" name="senha" id=""></div>
        <select name="categoria" id="category">
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>