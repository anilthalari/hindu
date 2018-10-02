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
$ge2=$_POST['ge2'];
$gt2=$_POST['gt2'];
$fa2=$_POST['fa2'];
$benv2=$_POST['benv2'];
$be2=$_POST['be2'];
$css1=$_POST['css1'];
$ict1=$_POST['ict1'];
$register_query = "INSERT INTO `bcom2`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `ge2`, `gt2`, `fa2`, `benv2`, `be2`, `css1`, `ict1`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$ge2','$gt2','$fa2','$benv2','$be2','$css1','$ict1')";
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
<option value="bcomseca">BCOM(COMP) SEC-A</option>
<option value="bcomsecb">BCOM(COMP) SEC-B</option>
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
<td>GENERAL ENGLISH-II</td>
<td><input type="text" name="ge2" size="30"></td>
</tr>

<tr>
<td>GENERAL TELUGU-II</td>
<td><input type="text" name="gt2" size="30"></td>
</tr>

<tr>
<td>FUNDAMENTALS OF ACCOUNTING-II</td>
<td><input type="text" name="fa2" size="30"></td>
</tr>


<tr>
<td>BUSINESS ENVIRONMENT-II</td>
<td><input type="text" name="benv2" size="30"></td>
</tr>
<tr>
<td>BUSINESS ECONOMICS-II</td>
<td><input type="text" name="be2" size="30"></td>
</tr>



<tr>
<td>COMMUNICATION SKILLS & SOFT SKILLS(CSS)-I</td>
<td><input type="text" name="css1" size="30"></td>
</tr>

<tr>
<td>INFORMATION & COMMUNICATION TECHNOLOGY(ICT)-I</td>
<td><input type="text" name="ict1" size="30"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>