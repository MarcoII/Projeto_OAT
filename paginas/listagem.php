<?php

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
echo "<h1>Lista de Cadastros</h1>";
echo "<table class='table table-bordered table-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "<th>Endereço</th>";
echo "<th>Telefone</th>";
echo "<th>Dia</th>";
echo "<th>Horário</th>";
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
			<?= $row["endereco"] ?>
		</td>
		<td>			
			<?= $row["telefone"] ?>
		</td>
		<td>			
			<?= $row["dia"] ?>
		</td>
		<td>			
			<?= $row["horario"] ?>
		</td>

		
</tr>

	


<?php 

} 

echo "</table>"

?>

<button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="?pg=sessao&logout=1">Sair</a></button>

