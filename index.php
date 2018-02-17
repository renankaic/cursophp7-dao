<?php

require_once('config.php');

/*
$sql = new SQL();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$renan = new Usuario();

$renan->loadById(2);

echo $renan; //Aqui vai chamar o método __toString() da classe Usuario.php
?>