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

        // SQL para selecionar dados no banco
        $sql = "SELECT id, titulo, autor FROM acervo";
        $dados = $conn->query($sql)->fetchAll();

        echo "<table >";
        echo "<tr>
        <th>ID</th>
        <th>Titulo</th>
       	<th>Autor</th>
       	</tr>";
        foreach ($dados as $item) {
            echo "<tr>";
            echo "<td>".$item['id']."</td>";
            echo "<td>".$item['titulo']."</td>";
            echo "<td>".$item['autor']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
    }
?>


<br><br>
<form action="delete_livro.php" method="POST">
	<label><strong>Cadastra Editora</strong></label><br>
        <p><strong>Digite o ID do Livro para excluir</strong></p>
		<p>Deletar Livro: <input type="number" name="deletaLivro" placeholder="Digite o ID aqui"></p>
		<input type="submit" name="enviar" value="Deletar">
</form>

</body>
</html>
