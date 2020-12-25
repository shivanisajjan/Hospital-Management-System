<?php
		include("connect.php");
		$name = $_POST['medicine_name'];
		
		$qty = $_POST['qty'];
		$query = "SELECT price FROM medicines WHERE medicine_name='$name'";

		$result = mysqli_query($conn,$query);
		
		$row = mysqli_fetch_array($result);
		
		
	 	$price = $row["price"];
		
		$sql = "UPDATE medicines SET qty = qty-'$qty' WHERE medicine_name='$name'";

		$result = mysqli_query($conn,$sql);
		

		if($result)
		{
			include("pharmacy_results.php");
			$price = $price * $qty;
			echo "<h3 ><span style='color:#07889B;font-family:Comfortaa'>Medicine Name</span> :   ".$name."<br> </h3><h3><span style='color:#07889B;font-family:Comfortaa'>Qty :    ".$qty."<span></h3><h3><span style='color:#07889B;font-family:Comfortaa'> Amount to be paid =  Rs".$price.".00</span></h3>";
		}
		else
		{
			echo "<h2><span style='color:#07889B;font-family:Comfortaa'>System error!</span></h2>";
		}

mysqli_close($conn);


?>

</body>
</html>

