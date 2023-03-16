<?php

echo "idade";

require_once __DIR__ . '/vendor/autoload.php';

use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'formulario',
    'username' => 'root',
    'password' => ''
]);

$database->insert('formulario', [
    'nome_completo' => $_POST['nome_completo'], //sessão para enviar os dados do form. para o bd no beekeeper//
    'idade' => $_POST['idade'],
    'sexo' => $_POST['sexo'],
]);

// var_dump($_GET);
//var_dump($_POST);    //mostra o back do php


 // echo $database;
?> 


