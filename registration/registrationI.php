<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="testdb";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$admissionnumber=$_POST['admissionnumber'];
$rollnumber=$_POST['rollnumber'];
$address=$_POST['address'];
$background=$_POST['background'];
$dob=$_POST['dob'];
$joiningdate=$_POST['joiningdate'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$fathername=$_POST['fathername'];
$fphone=$_POST['fphone'];
$course=$_POST['course'];
$adharnumber=$_POST['adharnumber'];
$community=$_POST['community'];
$subcaste=$_POST['subcaste'];
$activities=$_POST['activities'];
$medium=$_POST['medium'];
$register_query = "INSERT INTO `regi`(`fname`, `admissionnumber`, `rollnumber`, `address`,`background`, `dob`, `joiningdate`, `gender`, `phone`, `email`, `fathername`, `fphone`, `course`, `adharnumber`, `community`, `subcaste`, `activities`, `medium`) VALUES ('$fname','$admissionnumber','$rollnumber','$address','$background','$dob','$joiningdate','$gender','$phone','$email','$fathername','$fphone','$course','$adharnumber','$community','$subcaste','$activities','$medium')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<form action="" method="post">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="fname" placeholder="Enter Your Full Name"></td>
</tr>
<tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<td>Admission Number</td>
<td><input type="text" name="admissionnumber" placeholder="Enter Admission Number"></td>
</tr>
<tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<td>Roll Number</td>
<td><input type="text" name="rollnumber" placeholder="Enter Roll Number"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" placeholder="Enter Your Address"></td>
</tr>
<tr>
<td>Background</td>
<td><input type="radio" name="background" value="rural">Rural
<input type="radio" name="background" value="urban">Urban</td>
</tr>

<tr>
<td>DOB(Date Of Birth)</td>
<td><input type="text" name="dob" placeholder="Enter Your DOB"></td>
</tr>

<tr>
<td>Joining Date</td>
<td><input type="text" name="joiningdate" placeholder="Enter Your Joiningdate"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="others">others</td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name="phone" placeholder="Enter Your Phone Number"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>Email ID:</td>
<td><input type="email" name="email" placeholder="example@.com"></td>
 
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>Fathers Name:</td>
<td><input type="text" name="fathername" placeholder="Enter Your Fathername"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>Father Mobile Number :</td>
<td><input type="text" name="fphone" placeholder="Enter Father Mobile Number"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 <tr>
 <td>Course</td>
<td><select name="course">
<option value="-1" selected>Select..</option>
<option value="mpc">MPC</option>
<option value="bipc">BIPC</option>
<option value="cec">CEC</option>
<option value="hec">HEC</option>
<option value="mec">MEC</option>
</select></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>


<tr>
<td>Aadhaar Number:</td>
<td><input type="text" name="adharnumber" placeholder="Enter Your Aadhaar Number"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 <tr>
 <td>Community</td>
<td><select name="community">
<option value="-1" selected>Select..</option>
<option value="sc">SC</option>
<option value="st">ST</option>
<option value="bc">BC</option>
<option value="oc">OC</option>
<option value="general">General</option>
</select></td>
</tr>

<tr>
<td>Subcaste:</td>
<td><input type="text" name="subcaste" placeholder="Enter Your Subcaste"></td>
</tr>
 
<tr>
<td>Activities:</td>
<td><input type="text" name="activities" placeholder="Enter Your Activities"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr> 
<td>Medium</td>
<tr>
<td><input type="radio" name="medium" value="telugu">Telugu</td>
</tr>
<td></td>
<td></td>
 <tr> 
<td><input type="radio" name="medium" value="english">English</td>
</tr>
 </tr>0
<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>