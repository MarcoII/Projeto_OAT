<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios(email,senha) VALUES ('$email','$senha')";

$query = mysqli_query($link, $sql);

if ($query === TRUE) 
{
	echo '<div class="alert alert-success" role="alert">
  Usuário cadastrado!
</div>';

}else{
	echo '<div class="alert alert-danger" role="alert">
  Falhou!!
</div>';
}


?>