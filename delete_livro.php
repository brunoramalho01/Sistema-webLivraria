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
    include ('conexao_bd.php');

    try {
        // Cria conexão via PDO com os dados do banco e usuário
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        
        // Configurar os erros do PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Livro deletado com sucesso! Aperte no botão para Voltar.";

        // Dados a serem inseridos no banco
        $delete = $_POST['deletaLivro'];
        
        // SQL para selecionar dados no banco
        $sql = "DELETE FROM acervo WHERE id = $delete";
        
        //Variavel de execução do codigo SQL.
        $conn->exec($sql);

    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
    }    
?>

<br><br>
<a href="del_livro.php">voltar</a>
</body>
</html>