<?php
include('conexao_bd.php');

try {
   //cria conexão com banco de dados via PDO
   $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

   // configurar erros do PDO
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // Dados a serem inseridos no banco
        $nome = $_POST['nome_editora'];
        

   // SQL para inserir dados no banco
        $sql = "INSERT INTO editora (nome)
                VALUES ('$nome')";

   //Variavel de execução do codigo SQL.
   $conn->exec($sql);

   } catch(PDOException $e) {
   echo "erro ao conectar o Banco de Dados: ".$e->getMessage();

   }
?>
