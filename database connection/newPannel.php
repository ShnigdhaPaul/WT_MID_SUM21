<?php
		include 'index.php';
		$query = "select * from user_info";
		
		$result = mysqli_query($conn,$query);
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Username</th>
				  </tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Username"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	
		//include 'footer.php';
	
	
	
	
?>