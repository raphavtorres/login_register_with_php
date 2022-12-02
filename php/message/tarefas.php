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

    <h1>TAREFAS</h1>
    <form action="" method="POST">
        <textarea name="anotacao" id="anotacao" cols="50" rows="5"></textarea>
        <br>
        <div>
            <input type="submit" value="Enviar" name="btn_add" id="btn_add">
        </div>
    </form>
    
    <!-- executa função que mostra infos do banco de dados -->    
    <?php
        #include_once 'message/show_msg.php';
    ?>
    
</body>
</html>