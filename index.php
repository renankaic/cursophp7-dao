<?php

require_once('config.php');

/*
$sql = new SQL();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/


/* Trazer apenas um usuario
$renan = new Usuario();
$renan->loadById(2);
echo $renan; //Aqui vai chamar o método __toString() da classe Usuario.php
*/

/* Trazer uma lista de usuarios*/
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login com LIKE
//$search = Usuario::seach("e");
//echo json_encode($search);

//Carrega um usuario de acordo com o login e senha
$usuario = new Usuario();
$usuario->login('renan', '146155');
echo $usuario;

?>