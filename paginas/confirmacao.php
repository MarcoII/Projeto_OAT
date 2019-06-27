<?php
if (isset($_POST["nome"]) && isset($_POST["senha"])) {
	$nome = "administrador";
	$senha = "Ch@v31r0";
	
	$sql = "SELECT * FROM adm WHERE nome = '$nome' AND senha = '$senha'";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		
		$_SESSION["id_usuario"] = $row["id"];
		$_SESSION["nome_usuario"] = $row["nome"];
		header("Location: ?pg=sessao");
	}
	else{
		echo "Usuário ou senha inválido!";
	}
	
}
?>

<h2>Login</h2>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">

		<form action="?pg=sessao" method="POST">
		  <div class="form-group">
		    <label for="inputNome">Nome</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" value="<?= $nome ?>">			    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Senha</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</div>

	<div class="col-md-3">
	</div>
</div> 