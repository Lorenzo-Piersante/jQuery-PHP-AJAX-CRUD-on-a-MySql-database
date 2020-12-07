<?php
require '../connect.php';

$decodedData = json_decode($_POST['json']);     // TRADUZIONE DA JSON A OGGETTO PHP

$countryName = $decodedData -> countryName;
$shortDesc = $decodedData -> shortDesc;
$longDesc = $decodedData -> longDesc;

$sql = " INSERT INTO countries(countryName, shortDesc, longDesc) values ( '$countryName', '$shortDesc', '$longDesc') ";

$result = mysqli_query($conn, $sql);

?>

