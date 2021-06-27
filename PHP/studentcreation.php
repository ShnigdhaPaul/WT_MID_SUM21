<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<h3><center><u>Welcome to Learn Panda</u></center></h3>
			<td><h3><u> Student Creation Form </u></h3> </td>
				<tr>
					<td>Student Name :</td>
					<td> <input type="text" name="name" placeholder="Student Name "> </td>
				</tr>
				<tr>
				    <td>Father's Name :</td>
					<td><input type="text" placeholder=" Father's Name"> </td>
				</tr>
				<tr>
					<td>Mother's Name :</td>
					<td><input type="text" placeholder=" Mother's Name"> </td>
				</tr>
				<tr>
					<td>Present Address :</td>
					<td><input type="text"  placeholder="Street Address"> <input type="text"  placeholder="City">- <input type="text"  placeholder="State"> <br> <input type="text"  placeholder="Postal/Zip Code">  </td>
				</tr>
				<tr>
					<td>Permanent Address :</td>
					<td><input type="text"  placeholder="Street Address"> <input type="text"  placeholder="City">- <input type="text"  placeholder="State"> <br> <input type="text"  placeholder="Postal/Zip Code">  </td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" placeholder=" Your Email"> </td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" placeholder="Code"> <input type="text" placeholder="Number"> </td>
				</tr>
				<tr>
					<td>Course Name :</td>
					<td>
                       <select name="courses" id="courses">
                       <option value="none">Select Course</option>
                       <option value="it">Information Technologies</option>
                       <option value="arts">Arts & Humanties</option>
                       <option value="business">Business</option>
                       <option value="cs">Computer Scienc</option>
                       <option value="ds">Data Science</option>
                       <option value="math">Math & logic</option>
                       </select>
					</td>
				</tr></br>
	
				<tr>
					<td>Enter Password :</td>
					<td><input type="password"placeholder="Password">  </td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td><input type="password" placeholder=" Confirm Password"></td>
				</tr>
				<tr>
					<td  rowspan="2"><input type="reset" value="Edit"><input type="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>