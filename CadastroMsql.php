<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inserindo dados no banco</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<h3>Formulário de cadastro</h5>
<form name="cadastro" action="cadastrar.php" method="POST">
    <label>Seu Nome:</label>
        <input type="text" name="NomeCliente" required> <br>
    <label>Sobre Nome:</label>    
        <input type="text" name="SobreomeCliente" required><br>
    <label>Data Nascimento:</label>  
        <input type="date" name="NascimentoCliente" required><br>
    <label>Idade:</label>
        <input type="text" name="IdadeCliente" required><br>   
    <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>
