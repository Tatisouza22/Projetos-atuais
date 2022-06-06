<?php
    include_once("conexao.php");

    $nomecliente=$_POST['nome'];
    $cpfcliente=$_POST['cpf'];
    $emailcliente=$_POST['email'];
    $senhacliente=$_POST['senha'];
    $nascimentocliente=$_POST['nascimento'];
    $telefonecliente=$_POST['telefone'];
    
    $sql = "INSERT INTO usuario (nome, cpf, email, senha, nascimento, telefone) values ('$nomecliente', '$cpfcliente', '$emailcliente', '$senhacliente', '$nascimentocliente', '$telefonecliente')";
    
    $salvar = mysqli_query($mysqli, $sql);
?>
