
<?php
if (!isset($_SESSION["id_usuario"])) {
	header("Location: ?pg=area_restrita");
}
if ($_GET["logout"]) {
	session_destroy();
	header("Location: ?pg=index");
}
?>

