<?php
$nomeServidor = "localhost";
$nomeUsuario = "root";
$senha = "";
$nomeBD = "secomp";

//Criando a conexão com o banco de dados

$conexão = new mysqli($nomeServidor, $nomeUsuario, $senha, $nomeBD);

//Verificando a conexão
if ($conexão->connect_erro) {
	# code...
	die("A conexão falhou" . $conexao->connect_erro);

}

//Removendo um elemento do banco passando o ID
$sql = "DELETE FROM convidados WHERE id= $_POST[id]";

$conexão->query($sql);
$conexão->close();
?>
