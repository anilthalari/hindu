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
$aso=$_POST['aso'];
$bl=$_POST['bl'];
$it=$_POST['it'];
$as=$_POST['as'];
$css3=$_POST['css3'];
$ep=$_POST['ep'];
$le=$_POST['le'];
$register_query = "INSERT INTO `bcom4`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `aso`, `bl`, `it`, `as`, `css3`, `ep`, `le`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$aso','$bl','$it','$as','$css3','$ep','$le')";
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
<td> ACCOUNTING FOR SERVICE ORGANIZATIONS</td>
<td><input type="text" name="aso" size="30"></td>
</tr>

<tr>
<td> BUSINESS LAWS </td>
<td><input type="text" name="bl" size="30"></td>
</tr>

<tr>
<td> INCOME TAX </td>
<td><input type="text" name="it" size="30"></td>
</tr>

<tr>
<td> ANALYTICAL SKILLS </td>
<td><input type="text" name="as" size="30"></td>
</tr

<tr>
<td>COMMUNICATION AND SOFT SKILLS(CSS)-3</td>
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