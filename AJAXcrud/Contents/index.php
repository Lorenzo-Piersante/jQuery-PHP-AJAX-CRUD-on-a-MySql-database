<?php

require '../connect.php';

$sql = "SELECT id, countryName, shortDesc FROM countries";
$result = mysqli_query($conn, $sql);

echo "<table>
          <tr>
              <th>Id</th>
              <th>Country</th>
              <th>Short description</th>
              <th>Actions</th>
          </tr>";

while ( $row = $result->fetch_assoc() ) {
		echo "<tr>
		          <td>".$row["id"]."</td>
		          <td>".$row["countryName"]."</td>
		          <td>".$row["shortDesc"]."</td>
		          <td>
		              <button class='show' value=".$row["id"].">Show</button>
		              <button class='edit' value=".$row["id"].">Edit</button>
		              <button class='destroy' value=".$row["id"].">Destroy</button> 
		          </td>
		      </tr>";
	}
	
echo "</table>";

$conn->close();
?>