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

echo "<table>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td><?= $row["email"] ?></td>
		<td><?= $row["senha"] ?></td>
	</tr>
	


<?php 

} 

echo "</table>"

?>

<p>Lista de Cadastros</p>