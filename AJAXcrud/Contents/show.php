<?php

require '../connect.php';

$id = $_POST['id'];

$sql = "SELECT id, countryName, shortDesc, longDesc FROM countries WHERE id = $id";
$result = mysqli_query($conn, $sql);

$pippo = $result->fetch_assoc();

echo "<h2>". $pippo['id'] ."</h2>";
echo "<h1>". $pippo['countryName'] ."</h1>";
echo "<h3>". $pippo['shortDesc'] ."</h3>";
echo "<h4>". $pippo['longDesc'] ."</h4>";

?>