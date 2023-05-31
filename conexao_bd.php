<?php

$servidor = "localhost";
$usuario = "bruno";
$senha = "123";
$banco = "livraria_web";

 try {
        // Cria conexão via PDO com os dados do banco e usuário
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

        // Configura os erros do PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão bem sucedida!";

     } catch (PDOException $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
    }

 ?>