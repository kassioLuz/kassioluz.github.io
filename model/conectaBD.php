<?php
$servidor = "localhost";
$usuario = "root";
$senha ="kassio";


$conexao = pg_connect($servidor, $usuario, $senha) or die ("Nao foi possivel conectar ao servidor PostGreSQL");

echo "Conexão efetuada com sucesso!!";



?>