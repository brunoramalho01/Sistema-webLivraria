<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Minha Livraria Web</title>
     
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
     <header>
          <h1>Livraria Web</h1>
     </header>
     <!-- Menu de navegação -->
     <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="cadastrar_livro.php">Cadastrar Livro</a></li>
          <li><a href="del_livro.php">Deletar livros</a></li>
     </ul>
     <!-- Fim Menu de navegação -->
<br>
<br>
<?php
include('conexao_bd.php');

try {
   //cria conexão com banco de dados via PDO
   $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

   // configurar erros do PDO
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Livro cadastrado com sucesso!";
   
   // Dados a serem inseridos no banco
        $id = "NULL";
        $idEditora = "3";
        $titulo = $_POST['nomeTitulo'];
        $autor = $_POST['nomeAutor'];
        $ano = $_POST['anoLivro'];
        $preco = $_POST['precoLivro'];
        $quantidade = $_POST['qtdLivro'];
        $tipo =  $_POST['tipoLivro'];
        

   // SQL para inserir dados no banco
        $sql = "INSERT INTO acervo (id, idEditora, titulo, autor, ano, preco, quantidade, tipo) 
                    VALUES ('$id', '$idEditora', '$titulo', '$autor', '$ano', '$preco', '$quantidade', '$tipo')";


   //Variavel de execução do codigo SQL.
   $conn->exec($sql);

   } catch(PDOException $e) {
   echo "erro ao conectar o Banco de Dados: ".$e->getMessage();

   }
?>

<a href="cadastrar_livro.php">Voltar</a>
</body>
</html>