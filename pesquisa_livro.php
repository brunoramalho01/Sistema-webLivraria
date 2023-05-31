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
		<button  style="width:100px;">Buscar</button>
	</form>

<br>
<br>

Resultado da pesquisa dos livros
<?php
if (!isset($_GET['titulo'])) {
	header("Location: index.php");
	exit;
}

$titulo = "%".trim($_GET['titulo'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=livraria_web', 'bruno', '123');

$sth = $dbh->prepare('SELECT * FROM `acervo` WHERE `titulo` LIKE :titulo');
$sth->bindParam(':titulo', $titulo, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>

<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>

<label>
	<?php echo $Resultado['id']; ?> - <?php echo $Resultado['titulo']; ?>
</label>

<br>

<?php
} } else {
?>

<label>Não foram encontrados resultados pelo termo buscado.</label>

<?php
}
?>

<br>

</body>
</html>

</body>
</html>