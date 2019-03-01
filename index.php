<?php

require_once ("config.php");

//Excluir um usuário
$usuario =  new Usuario();
$usuario->loadById(11);
$usuario->delete();
echo $usuario;

//Update de um usuário
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("craudia", "senhadacraudia");
//echo $usuario;

//Insere um novo usuário
//$aluno = new Usuario("aluno", "@luno");
//$aluno->insert();
//echo $aluno;

//Carrega uma lista de usuários buscando pelo login e a senha
//$usuario = new Usuario();
//$usuario->login("lola","senhadalola");
//echo $usuario;

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("lo");
//echo json_encode($search);

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega um usuário
//$lola = new Usuario();
//$lola->loadById(5);
//echo $lola;

//Mostrava os usuário antes da classe Usuario.php
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

?>