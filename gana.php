<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="testdb";
try{
$conn = mysqli_connect($servername,$username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$admissionnumber = mysqli_real_escape_string($conn, $_POST['admissionnumber']);
$rollnumber = mysqli_real_escape_string($conn, $_POST['rollnumber']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$course = mysqli_real_escape_string($conn, $_POST['course']);
$attendence = mysqli_real_escape_string($conn, $_POST['attendence']);
$register_query = "INSERT INTO `anil`(`fname`, `admissionnumber`, `rollnumber`, `date`, `course`, `attendence`) VALUES ('$fname','$admissionnumber','$rollnumber','$date','$course','$attendence')";
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
<td><input type="text" name="fname" placeholder="fname"></td>
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
<td>Admission number</td>
<td><input type="text" name="admissionnumber" placeholder="admission number"></td>
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
<td>Roll number</td>
<td><input type="text" name="rollnumber" placeholder="enter Rollnumber"></td>
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
<td>Date</td>
<td><input type="text" name="date" placeholder="date"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</td>
<tr>
<td>Course</td>
<td><select name="course">
<option value="-1" selected>select..</option>
<option value="mpc">mpc</option>
<option value="mec">mec</option>
<option value="bipc">bipc</option>
<option value="cec">cec</option>
<option value="hec">hec</option>
</select></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>Attendence</td>
<td><input type="radio" name="attendence" value="present" size="10">present</td>
<td><input type="radio" name="attendence" value="absent" size="10">absent</td>
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
<td></td>
<td></td>
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
<td></td>
<td></td>
</tr>
 
<tr> 
 
 

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>