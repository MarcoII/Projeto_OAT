<?php

require_once("sql/conexao_bd.php");

?>

<?php
// if (isset($_COOKIE["teste"])) {
// 	echo $_COOKIE["teste"];
// }
// else{
// 	setcookie("teste", "teste", (time() + 30));	
// }
// exit;
//Inicializa sessoes
session_start();

?>

<?php

if(isset($_GET["pg"])){
	$pagina = $_GET["pg"];
}
else{
	$pagina = "inicio";
}	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chaveiro Boa Ventura</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<div class="container" id="cabecalho">
			
			<div class="jumbotron">
						
				<h1>Chaveiro Boa Ventura</h1>

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="img/Keys3.jpg" height="400" alt="Primeiro Slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/Keys2.jpg" height="400" alt="Segundo Slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/Keys1.jpg" height="400" alt="Terceiro Slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Próximo</span>
				  </a>
				</div>

				<ul class="menu">
					<li><a class="btn btn-primary" role="button" href="?ph=inicio">Início</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=localizacao">Localização</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=confirmacao">Sessao</a></li>

				</ul>

			</div>

		</div>

		<div class="container" id="corpo">

				<?php

				if(isset($_SESSION["nome_usuario"])){
					echo '<p>Olá '.$_SESSION["nome_usuario"].'!</p>';
				}
				?>

			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item" aria-current="page"><a href="?pg=inicio">Home</a></li>
			    <?php
			    if ($pagina == "sobre") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=sobre">Sobre</a></li>';
			    } elseif ($pagina == "cadastro") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=cadastro">Cadastro</a></li>'; 
			    } elseif ($pagina == "localizacao") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=localizacao">Localização</a></li>';
			    }elseif ($pagina == "listagem") {
			    	echo '<li class="breadcrumb-item" aria-current="page"><a href="?pg=confirmacao">Sessão</a></li>';
			    }
			    ?>
			  </ol>
			</nav>

			<?php			

				include("paginas/".$pagina.".php");

			?>
			
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos reservados.</h4>				

			</div>
			
		</div>


	</body>
</html>