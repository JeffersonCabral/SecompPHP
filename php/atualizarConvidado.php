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
	die("Falha ao conectar". $conexão->connect_erro);
}

//Atualizando dados no banco
$sql = "UPDATE convidados SET nome ='$_POST[nome]',
                            sobrenome = '$_POST[sobrenome]',
                            email = '$_POST[email]' 
                            WHERE id = $_POST[id]";

$conexão->query($sql);
$conexão->close();

?>

