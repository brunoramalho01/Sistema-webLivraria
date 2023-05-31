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

<!--<form action="inserir_dados_editora.php" method="POST">
	<label> Cadastra Editora </label><br>
		<p>Editora: <input type="text" name="nome_editora"></p>
		<input type="submit" name="enviar" value="Cadatrar">
</form>-->

<br><br>

<form action="inserir_dados_acervo.php" method="POST">
	<label><strong>Cadastra Livro</strong></label><br><br>
	
	<label>Titulo:</label><br>
		<input type="text" name="nomeTitulo" placeholder="Nome do Titulo"><br>
    <label>Autor : </label><br>
    	<input type="text" name="nomeAutor" placeholder="Nome do Autor"><br>
    <label>Ano : </label><br>
    	<input type="number" name="anoLivro" placeholder="Ano do Livor Ex.(1992)"><br>
    <label>Preço: R$</label><br>
    	<input type="number" name="precoLivro" placeholder="Preço"><br>
    <label>Quantidade: </label><br>
    	<input type="number" name="qtdLivro" placeholder="Quantidade"><br>
    <label>Tipo: </label><br>
    	<input type="number" name="tipoLivro" placeholder="Numero do Tipo"><br><br>
    <input type="submit" name="enviar" value="Cadatrar">
</form>

</body>
</html>