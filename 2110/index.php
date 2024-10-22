<?php
# arquivo index.php
#require, include, require_once, include_once
require("Usuario.php");

$u1 = new Usuario("Marília");
echo "<p>O nome do user é $u1->nome";

$u1 ->sobrenome = "Stefenon Rodrigues";
echo '<p>'.$u1-> getNomeCompleto().'</p>';

#chama o invoke(usar o obj como uma função)
$u1();

$u1->email ="marilia@gmail.com";
echo "<p>meu e-mail é $u1->email";



