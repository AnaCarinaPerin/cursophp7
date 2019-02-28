<?php

require_once ("config.php");

$lola = new Usuario();

$lola->loadById(5);

echo $lola;

//Forma antes da classe Usuario.php

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>