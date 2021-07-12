<?php
$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="webtech_class_work";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
if($conn){
		echo "Connected<br>";
		$query = "update user_info set `id`='[NULL]',`Name`='[SHARUP]',`Username`='[PAUL1234]',`password`='[22445]' where id= '[1]'";
		if(!mysqli_query($conn,$query)){
			echo mysqli_error($conn);
			//echo mysqli_errno($conn);
		}
		else{
			echo "update";
		}
	}
	
		
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
	
		
	
?>