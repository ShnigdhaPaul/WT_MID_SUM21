<?php 
	
	$name="";
	$err_name="";
	$password="";
	$err_password="";
	
$confirmpassword="";
	$err_confirmpassword="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$postal="";
	$err_postal="";
	$ShasError=false;
	
if(isset($_POST["submit"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		else{
			$name = $_POST["name"];
		}
		
		//password
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
		
		
		//confirmpassword
		if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Password Required";
		}
		else if($_POST["password"]!=$_POST["confirmpassword"])
{
  $hasError = true;
 $err_confirmpassword="Password doesn't match";
}
else {

	$confirmpassword=$_POST["confirmpassword"];
}

//email
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
		
		//phone
		
		if(empty($_POST["code"])){
			$hasError = true;
			$err_Code="Code Required";
		}
		else if(!is_numeric($_POST["code"]))
{
  $hasError = true;
  $err_code="Enter a number";

}
		
		else{
			$Code = $_POST["code"];
		}
		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="Number Required";
		}
		else if(!is_numeric($_POST["number"])){
	   $hasError = true;
	  $err_phone="Phone number Required";
}

		
		else{
			$number = $_POST["number"];
		}
		
		//address
		
		if(empty($_POST["street"])){
			$hasError = true;
			$err_street="street Required";
		}
		
		else{
			$street = $_POST["street"];
		}
		
		
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="City Required";
		}
		
		else{
			$city = $_POST["city"];
		}
		
		if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		
		else{
			$state = $_POST["state"];
		}
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal & zip Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $name."<br>";	
			echo $password."<br>";
			echo $confirmpassword."<br>";
			echo $street."<br>";
			echo $city."<br>";
			echo $state."<br>";
			echo $postal."<br>";
			echo $email."<br>";
			echo $Code."<br>";
			echo $number."<br>";
	header("Location: loginpage.php");
	}
}
	

?> 

<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Registration Form  </td>
				<tr>
					<td>Enter Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				<tr>
					<td>Enter Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td>: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" placeholder=" Confirm Password">  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>: <input type="text" name="street" value="<?php echo $street; ?>" placeholder="Street Address"> <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City">- <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"> <br> <input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal/Zip Code">  </td>
					<td><span> <?php echo $err_street;?> </span></td>
					<td><span> <?php echo $err_city;?> </span></td>
					<td><span> <?php echo $err_state;?> </span></td>
					<td><span> <?php echo $err_postal;?> </span></td>
					
				</tr>
				<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"placeholder="Insert Your Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>: <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code"> <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"> </td>
					 
					<td><span> <?php echo $err_code;?> </span></td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="submit" value="register"><input type="reset" value="Reset"> </td>
					
				</tr>
				
				
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>