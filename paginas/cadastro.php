<?php

$actionEditar = "";
$id = 0;
$nome = NULL;
$email = NULL;


if (isset($_GET["editar"])) {
	$id = $_GET["editar"];
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		$nome = $row["nome"];
		$email = $row["email"];
		
	}
	else{
		echo "Falha ao carregar registro!";
	}
	$actionEditar = "&editar=$id";
}

?>


<h2>Cadastro</h2>


<div class="row"> 
	<div class="col-md-3"> </div>
	<div class="col-md-6">



		<form action="?pg=processar<?= $actionEditar ?>" method="POST">
		<div class="form-group">
		    <label for="inputNome">Nome</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">		    
		 </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">		    
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

	<div class="col-md-3"> </div>
</div>



