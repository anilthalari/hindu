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
$m4ra=$_POST['m4ra'];
$c4spc=$_POST['c4spc'];
$p4trp=$_POST['p4trp'];
$c4spcp=$_POST['c4spcp'];
$p4trpp=$_POST['p4trpp'];
$as=$_POST['as'];
$css3=$_POST['css3'];
$ep=$_POST['ep'];
$le=$_POST['le'];
$register_query = "INSERT INTO `bsc4`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `m4ra`, `c4spc`, `p4trp`, `c4spcp`, `p4trpp`, `as`, `css3`, `ep`, `le`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$m4ra','$c4spc','$p4trp','$c4spcp','$p4trpp','$as','$css3','$ep','$le')";
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
<option value="mpcseca">BSC SEC-A</option>
<option value="mpcsecb">BSC SEC-B</option>
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
<td> MATHEMATICS-IV REAL ANALYSIS</td>
<td><input type="text" name="m4ra" size="30"></td>
</tr>

<tr>
<td>CHEMISTRY-IV SPECTRSCOPY & PHYSICAL CHEMISTRY </td>
<td><input type="text" name="c4spc" size="30"></td>
</tr>

<tr>
<td> PHYSICS-IV THERMODYNAMICS & RADIATION PHYSICS </td>
<td><input type="text" name="p4trp" size="30"></td>
</tr>

<tr>
<td> CHEMISTRY-IV SPECTRSCOPY & PHYSICAL CHEMISTRY(Practical)</td>
<td><input type="text" name="c4spcp" size="30"></td>
</tr>


<tr>
<td> PHYSICS-IV THERMODYNAMICS & RADIATION PHYSICS (Practical)</td>
<td><input type="text" name="p4trpp" size="30"></td>
</tr>

<tr>
<td> ANALYTICAL SKILLS </td>
<td><input type="text" name="as" size="30"></td>
</tr>

<tr>
<td>COMMUNICATION SKILLS & SOFT SKILLS (CSS)-III</td>
<td><input type="text" name="css3" size="30"></td>
</tr>

<tr>
<td>ENTREPRENEURSHIP</td>
<td><input type="text" name="ep" size="30"></td>
</tr>

<tr>
<td>LEADERSHIP EDUCATION</td>
<td><input type="text" name="le" size="30"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>