<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="marks";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$class=$_POST['class'];
$medium=$_POST['medium'];
$admissionnumber=$_POST['admissionnumber'];
$name=$_POST['name'];
$rollnumber=$_POST['rollnumber'];
$ge1=$_POST['ge1'];
$gt1=$_POST['gt1'];
$fa1=$_POST['fa1'];
$bo1=$_POST['bo1'];
$be1=$_POST['be1'];
$es=$_POST['es'];
$hvpe=$_POST['hvpe'];
$register_query = "INSERT INTO `bcom1`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `ge1`, `gt1`, `fa1`, `bo1`, `be1`, `es`, `hvpe`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$ge1','$gt1','$fa1','$bo1','$be1','$es','$hvpe')";
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
<td>Class</td>
<td><select name="class">
<option value="-1" selected>Select..</option>
<option value="bcomseca">BCOM(COMP) SEA-A</option>
<option value="bcomsecb">BCOM(COMP) SEA-B</option>
</select></td>
</tr>
<tr>
<td>Medium</td>
<td><select name="medium">
<option value="em">EM</option>
<option value="tm">TM</option>
</select></td>
</tr>

<tr>
<td>Admission Number</td>
<td><input type="text" name="admissionnumber" size="30"></td>
</tr>

<tr>
<td>Full Name</td>
<td><input type="text" name="name" size="30"></td>
</tr>

<tr>
<td>Roll Number</td>
<td><input type="text" name="rollnumber" size="30"></td>
</tr>

<tr>
<td>GENERAL ENGLISH-I</td>
<td><input type="text" name="ge1" size="30"></td>
</tr>

<tr>
<td>GENERAL TELUGU-I</td>
<td><input type="text" name="gt1" size="30"></td>
</tr>

<tr>
<td>FUNDAMENTALS OF ACCOUNTING-I</td>
<td><input type="text" name="fa1" size="30"></td>
</tr>

<tr>
<td>BUSINESS ORGANIZATION-I</td>
<td><input type="text" name="bo1" size="30"></td>
</tr>

<tr>
<td>BUSINESS ECONOMICS-I</td>
<td><input type="text" name="be1" size="30"></td>
</tr>

<tr>
<td>ENVIRONMENTAL STUDIES</td>
<td><input type="text" name="es" size="30"></td>
</tr>

<tr>
<td>HUMAN VALUES & PROFESSIONAL ETHICS</td>
<td><input type="text" name="hvpe" size="30"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>