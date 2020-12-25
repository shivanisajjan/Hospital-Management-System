<?php
include("connect.php");
include("pharmacy_results.php");
$sql = "SELECT * FROM medicines";
		$result = mysqli_query($conn,$sql);
		if($result)
		{

			echo "<div id=\"view\" class=\"tabcontent\"> <table>
				  <tr>
				    <th class='td'>Medicine Name   </th>
				    <th class='td'>Mfg Date    </th>
				    <th class='td'>Expiry Date   </th>
				    <th class='td'>Price   </th>
				    <th class='td'>Qty   </th>
				  </tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr> <td class='td'>".$row['medicine_name']."   </td>
				    <td class='td'>".$row['mfg_date']."   </td>
				    <td class='td'>".$row['exp_date']."  </td>
				    <td class='td'>".$row['price']."  </td>
				    <td class='td'>".$row['qty']."  </td>
				  </tr>";	
			}
			
			echo "</div>";
		}
		else
		{
			echo "<h2>Unable to view record</h2>";
		}
	
mysqli_close($conn);

?>
