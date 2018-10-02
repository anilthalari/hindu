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
$applicationid=$_POST['applicationid'];
$course=$_POST['course'];
$class=$_POST['class'];
$year=$_POST['year'];
$scholar=$_POST['scholar'];
$instal1=$_POST['instal1'];
$instal2= $_POST['instal2'];
$instal3=$_POST['instal3'];
$fine=$_POST['fine'];
$fee=$_POST['fee'];
$register_query = "INSERT INTO `dfinance`(`fname`, `admissionnumber`, `rollnumber`, `applicationid`, `course`, `class`, `year`, `scholar`, `instal1`, `instal2`, `instal3`, `fine`, `fee`) VALUES ('$fname','$admissionnumber','$rollnumber','$applicationid','$course','$class','$year','$scholar','$instal1','$instal2','$instal3','$fine','$fee')";
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
<td>Application ID</td>
<td><input type="text" name="applicationid" placeholder="Enter Your Application ID"></td>
</tr>
<tr>
<td>Course</td>
<td><select name="course">
<option value="-1" selected>Select..</option>
<option value="bsc">BSC</option>
<option value="bcom">BCOM</option>
<option value="ba">BA</option>
</select></td>
</tr>

<tr>
<td>class</td>
<td><input type="text" name="class" placeholder="Enter Your Class Name"></td>
</tr>
<tr>
<td>Year</td>
<td><input type="radio" name="year" value="year1">Year-I
<input type="radio" name="year" value="year2">Year-II
<input type="radio" name="year" value="year3">Year-III</td>
</tr>

<tr>
<td>Scholarship</td>
<td><input type="radio" name="scholar" value="applied">Applied</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="scholar" value="notapplied">Not Applied</td>
</tr>

<tr>
<td>Instalment-I</td>
<td><input type="text" name="instal1" placeholder="Enter Your Instalment-I"></td>
</tr>
<tr>
<td>Instalment-II</td>
<td><input type="text" name="instal2" placeholder="Enter Your Instalment-II"></td>
</tr>
<tr>
<td>Instalment-III</td>
<td><input type="text" name="instal3" placeholder="Enter Your Instalment-III"></td>
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
<td>Fine:</td>
<td><input type="text" name="fine" placeholder="Fine"></td>
 
</tr>
 
<tr>
<td>Total Fee:</td>
<td><input type="text" name="fee" placeholder="Total Fee"></td>
 
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
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>