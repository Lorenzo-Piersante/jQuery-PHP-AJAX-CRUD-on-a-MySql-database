<?php

$id = $_POST['id'];

echo "Modifica nazione con id: ". $id;

?>

<p>Country name:</p>
<input type="text" id="updatedCountryName"><br><br>
<p>Short description:</p>
<input type="text" id="updatedShortDesc"><br><br>
<p>Long Description:</p>
<input type="text" id="updatedLongDesc"><br><br>
<input type="text" id="hiddenId" value="<?php echo $id ?>" style="display: none;">

<button id="update">Update</button>