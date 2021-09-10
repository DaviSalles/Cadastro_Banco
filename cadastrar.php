<?php 
$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobreomeCliente'];
$nascimento = $_POST['NascimentoCliente'];
$idade = $_POST['IdadeCliente'];


$strcon = mysqli_connect ('localhost' , 'root' , '' , 'dados_formulario') or die ('Erro ao tentar se conectar');
$sql = "INSERT INTO cadastro_nome VALUES";
$sql .= "('$nome', '$sobrenome', '$nascimento', $idade)";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar cliente");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso !!";
?>