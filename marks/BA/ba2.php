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
$e2me2=$_POST['e2me2'];
$m2sg=$_POST['m2sg'];
$s2mepd=$_POST['s2mepd'];
$s2mepdlab=$_POST['s2mepdlab'];
$css1=$_POST['css1'];
$ict1=$_POST['ict1'];
$register_query = "INSERT INTO `ba2`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `ge2`, `gt2`, `e2me2`, `m2sg`, `s2mepd`, `s2mepdlab`, `css1`, `ict1`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$ge2','$gt2','$e2me2','$m2sg','$s2mepd','$s2mepdlab','$css1','$ict1')";
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
<option value="mpcseca">BA SEC-A</option>
<option value="mpcsecb">BA SEC-B</option>
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
<td> GENERAL TELUGU-II</td>
<td><input type="text" name="gt2" size="30"></td>
</tr>

<tr>
<td> ECONOMICS-II MICRO-ECONOMICS-II</td>
<td><input type="text" name="e2me2" size="30"></td>
</tr>

<tr>
<td> MATHEMATICS-II SOLID GEOMETRY</td>
<td><input type="text" name="m2sg" size="30"></td>
</tr>


<tr>
<td>STATISTICS-II MATHEMATICAL EXPECT & PROBABILITY DISTRI</td>
<td><input type="text" name="s2mepd" size="30"></td>
</tr>

<tr>
<td>STATISTICS-II  LAB MATHEMATICAL EXPECT & PROBABILITY DISTRI</td>
<td><input type="text" name="s2mepdlab" size="30"></td>
</tr>

<tr>
<td>COMMUNICATION AND SOFT SKILLS(CSS)-I</td>
<td><input type="text" name="css1" size="30"></td>
</tr>

<tr>
<td>INFORMATION & COMMUNICATION TECHNOLOGY (ICT)-I</td>
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