<?php 
$email="";
	$err_email="";
	$password="";
	$err_password="";
	$hasError=false;
	
	if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		
 else if(strpos($_POST["email"],"@.")){
          $hasError=true;
			     $err_email="Email must contain @ and .";
		     }
		
		
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		
		else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["pass"]);
		    }
			 else if(strlen($_POST["password"])<8){
        $hasError=true;
				 $err_password="Password Must Be 8 Charachter Long";
		 }
			 else if(!strpos($_POST["password"],"#")){
         $hasError=true;
			 $err_password="Password should contain special character";
		    }
		 else if(!strpos($_POST["password"],"5")){
         $hasError=true;
			    $err_password="Password should contain Numeric values";
		   }
		  
		   else if(strpos($_POST["password"]," ")){
          $hasError=true;
			    $err_password="Password should not contain space";
		    }
			 else{
				 $password=$_POST["password"];
			 }
			 if(!$hasError){
				 header("Location: course.php");
			 }
	
?> 

<html>
	<head></head>
	<body>
		<form action="" method="post">
		
		<fieldset>
		
			<table >
			
			<tr>
			<td> <center> LogIn Form  </td>
			</tr>
			
			<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"placeholder="Insert Your Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
			<tr>
					<a href = "" > <td  rowspan="2" > <input type="submit" value="Submit Form"> </a>  <input type="reset" value="Reset"> </td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>