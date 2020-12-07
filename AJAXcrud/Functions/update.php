<?php
require '../connect.php';

$decodedData = json_decode($_POST['json']);     // TRADUZIONE DA JSON A OGGETTO PHP

$updatedCountryName = $decodedData -> updatedCountryName;
$updatedShortDesc = $decodedData -> updatedShortDesc;
$updatedLongDesc = $decodedData -> updatedLongDesc;
$hiddenId = $decodedData -> hiddenId;

$sql = " UPDATE countries SET countryName = $updatedCountryName, shortDesc = $updatedShortDesc, longDesc = $updatedLongDesc WHERE id = $hiddenId ";

$result = mysqli_query($conn, $sql);

?>