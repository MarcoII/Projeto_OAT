<?php


if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM usuarios WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE){
	echo '<div class="alert alert-success" role="alert">
  		Excluído com sucesso!
	</div>';	
	}
else{
	echo '<div class="alert alert-danger" role="alert">
  		Falhou a exclusão!
	</div>';
	}
}

$sql = "SELECT * FROM usuarios";

$query = mysqli_query($link, $sql);


// echo "<table>";


// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>$email</td>";
// 	// echo $row["email"];
// 	// echo "</td>";

// 	echo "<td>";
// 	echo $row["senha"];
// 	echo "</td>";

// 	echo "</tr>";

// }

// echo "</table>";

echo "<table class='table table-bordered table-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($query)){


?>

	
<tr>
		<td>
			<?= $row["id"] ?>
		</td>
		<td>
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["email"] ?>
		</td>
		<td>
			<a 
			href="?pg=cadastro&editar=<?= $row["id"] ?>"
			>
				Editar
			</a>
		</td>
		<td>
			<a 
			href="?pg=listagem&excluir=<?= $row["id"] ?>"
			>
				Excluir
			</a>
		</td>
</tr>

	


<?php 

} 

echo "</table>"

?>

<p>Lista de Cadastros</p>