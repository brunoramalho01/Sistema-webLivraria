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
	
	<!-- Barra de pesquisa -->

	<h2>Pesquisa de Livros</h2>
	<form action="pesquisa_livro.php" method="GET">
		<label>Nome do livro</label>
		<input type="text" name="titulo" size="50" placeholder="Insira o nome do livro">
		
		<button style="width:100px;">Buscar</button>
	</form>
	<!-- Fim Barra de pesquisa -->
</div>
<br>
<br>


</body>
</html>