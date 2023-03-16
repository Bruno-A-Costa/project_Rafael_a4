
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
</head>
<body>

<a href="index.html"> <b> VOLTAR </b> </a>;

</body>

<!--**********************************************************************************************************-->

<?php

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

$data = $database->select('formulario', [
    'nome_completo',
    'idade',
    'sexo'
], [
    'sexo' => 'masculino'
]);

var_dump ($data); // Mostra o backend do php


?>


</html>