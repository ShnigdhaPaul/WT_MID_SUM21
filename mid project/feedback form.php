<?php
$name="";
$err_name="";
$course="";
$err_course="";
$o1="";
$err_o1="";
$o2="";
$err_o2="";
$comment="";
$err_comment="";
$hasError=false;
	
if(isset($_POST["submit"])){
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

if(empty($_POST["course"])){
			$hasError = true;
			$err_course="Course Required";
}
			else{
			$course = $_POST["course"];
		}
		
		if(empty($_POST["o1"])){
			$hasError = true;
			$err_o1=" This field is Required";
		}
		else{
			$o1 = $_POST["o1"];
		}
		if(empty($_POST["o2"])){
			$hasError = true;
			$err_o2=" This field is Required";
		}
		else{
			$o2 = $_POST["o2"];
		}
		if(empty($_POST["comment"])){
			$hasError = true;
			$err_comment = "This field is Required";
		}
		else{
			$comment = $_POST["comment"];
		}
		
		if(!$hasError){
				 echo "<h1> Thank You</h1>";
			 }
}
		

?>


<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Feedback Form  </td>
				<tr>
					<td>Enter Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Enter Course</td>
					<td>: <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Your Course ...."> </td>
					<td><span> <?php echo $err_course;?> </span></td>
				</tr>
				<td> <b> Please rate our programs  </td>
				
				<tr>
					<td>How was the course instructor</td>
					<td>: <input type="radio" value=" not good" <?php if($o1=="not good") echo "checked"; ?> name="o1"> not good
					<input name="o1" <?php if($o1==" style") echo " modarate"; ?> value=" modarate" type="radio">  modarate
					<input type="radio" value="good " <?php if($o1==" modarate") echo "checked"; ?> name="o1"> good </td>
					<td><span> <?php echo $err_o1;?> </span></td>
				</td>
				<tr>
					<td>How was the course curriculumn</td>
					<td>: <input type="radio" value=" not good" <?php if($o1=="not good") echo "checked"; ?> name="o2"> not good
					<input name="o2" <?php if($o1==" style") echo " modarate"; ?> value=" modarate" type="radio">  modarate
					<input type="radio" value="good " <?php if($o1==" modarate") echo "checked"; ?> name="o2"> good </td><br>
					<td><span> <?php echo $err_o2;?> </span></td>
				</td>
				</tr>
				<br>
					<tr>
					<td> <b> what should be changed during course</td>
					<tr>
					<td>comment</td>
					<td>: <textarea name="comment" ><?php echo $comment; ?></textarea>
					<td><span> <?php echo $err_comment;?> </span></td>
					</td>
				</tr>
				<tr>
				<td colspan="2" align="right"> <input type="submit" name="submit" value="Submit"></td>
								</tr>
								</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>