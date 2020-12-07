<?php
require '../connect.php';

$id = $_POST['id'];

$sql = " DELETE FROM countries WHERE id = $id ";

$result = mysqli_query($conn, $sql);

?>