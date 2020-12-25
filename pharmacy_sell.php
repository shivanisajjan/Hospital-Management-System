<?php

if($_GET['qty'] == NULL)
{
	header('Location:pharmacy.php');
}

include("pharmacy_results.php");
include("connect.php");
	
		$name = @$_GET['medicine_name'];
		$qty = @$_GET['qty'];
		$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND qty <= '$qty'";

		$result = mysqli_query($conn,$sql);
		
		if($result)
		{
			echo "<br><br>";
			echo "<table class='table'>
				  <tr class='td'><th class='tr'>Medicine Name</th>
				    <th class='td'>Mfg Date</th>
				    <th class='td'>Expiry Date</th>
				    <th class='td'>Price</th>
				    <th class='td'>Qty</th>
				  </tr>";
				  
			$row = mysqli_fetch_assoc($result);
			$name = $row['medicine_name'];

			echo "<tr><td class='td'>".$row['medicine_name']."</td>
				    <td class='td'>".$row['mfg_date']."</td>
				    <td class='td'>".$row['exp_date']."</td>
				    <td class='td'>".$row['price']."</td>
				    <td class='td'>".$row['qty']."</td>
				  </tr>";

			echo "</table><br><br><br><form action=\"pharmacy_sell_view.php\" method='POST'><input type='hidden' name='medicine_name' value='$name'/><input type='hidden' name='qty' value=\"$qty\"/><input type='submit' value='      SELL     '/></form>";

		}

		else
			{echo "<br><br><h2>Sorry ....Requested quantity not available.</h2>";}

mysqli_close($conn);
?>
</body>
</html>
