<?php
$nomeServidor = "localhost";
$nomeUsuario = "root";
$senha = "";
$nomeBD = "secomp";

//Criando a conexão com o banco de dados
$conexão = new mysqli($nomeServidor, $nomeUsuario, $senha, $nomeBD);

//Verificando a conexão
if ($conexão->connect_error) {
	# code...
	die("Falha ao conectar". $conexão->connect_error);
}

//Inserindo dados no banco
$sql = "INSERT INTO convidados (nome, sobrenome, email)
VALUES ('$_POST[nome]', '$_POST[sobrenome]', '$_POST[email]')";

$conexão->query($sql);
$conexão->close();
header('Location: ../index.html');
?>