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
$mecb=$_POST['mecb'];
$m1de1=$_POST['m1de1'];
$s1dsp1=$_POST['s1dsp1'];
$s1dsp1lab=$_POST['s1dsp1lab'];
$es=$_POST['es'];
$hvpe=$_POST['hvpe'];
$register_query = "INSERT INTO `ba1`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `ge1`, `gt1`, `mecb`, `m1de1`, `s1dsp1`, `s1dsp1lab`, `es`, `hvpe`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$ge1','$gt1','$mecb','$m1de1','$s1dsp1','$s1dsp1lab','$es','$hvpe')";
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
<option value="baseca">BA SEC-A</option>
<option value="basecb">BA SEC-B</option>
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
<td> GENERAL TELUGU-I</td>
<td><input type="text" name="gt1" size="30"></td>
</tr>

<tr>
<td> MICRO-ECONOMICS-CONSUMER BEHAVIOR</td>
<td><input type="text" name="mecb" size="30"></td>
</tr>

<tr>
<td> MATHEMATICS-I DIFFERENTIAL EQUATIONS-I</td>
<td><input type="text" name="m1de1" size="30"></td>
</tr>


<tr>
<td>STATISTICS-I DESCRIPTIVE STATISTICAL AND PROBABILITY-I </td>
<td><input type="text" name="s1dsp1" size="30"></td>
</tr>

<tr>
<td>STATISTICS-I LAB DESCRIPTIVE STATISTICAL AND PROBABILITY-I</td>
<td><input type="text" name="s1dsp1lab" size="30"></td>
</tr>

<tr>
<td> ENVIRONMENTAL STUDIES </td>
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