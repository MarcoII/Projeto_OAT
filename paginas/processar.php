<?php
$id = 0;
$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$dia = $_POST["dia"];
$horario = $_POST["horario"];


if($id = 0){
	echo "Tente novamente";
}
else{
	$sql = "INSERT INTO usuarios (nome, email, endereco, telefone, dia, horario) VALUES ('$nome', '$email', '$endereco', '$telefone', '$dia', '$horario')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado/Alterado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}


?>