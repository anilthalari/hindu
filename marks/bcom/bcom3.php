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
$ge3=$_POST['ge3'];
$gt3=$_POST['gt3'];
$ca3=$_POST['ca3'];
$bs3=$_POST['bs3'];
$btp3=$_POST['btp3'];
$css2=$_POST['css2'];
$ict2ifw=$_POST['ict2ifw'];
$register_query = "INSERT INTO `bcom3`(`class`, `medium`, `admissionnumber`, `name`, `rollnumber`, `ge3`, `gt3`, `ca3`, `bs3`, `btp3`, `css2`, `ict2ifw`) VALUES ('$class','$medium','$admissionnumber','$name','$rollnumber','$ge3','$gt3','$ca3','$bs3','$btp3','$css2','$ict2ifw')";
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
<td>GENERAL ENGLISH-III</td>
<td><input type="text" name="ge3" size="30"></td>
</tr>

<tr>
<td>GENERAL TELUGU-III</td>
<td><input type="text" name="gt3" size="30"></td>
</tr>


<tr>
<td>CORPORATE ACCOUNTING-III</td>
<td><input type="text" name="ca3" size="30"></td>
</tr>

<tr>
<td>BUSINESS STATISTICS-III</td>
<td><input type="text" name="bs3" size="30"></td>
</tr>

<tr>
<td> BANKING THEORY & PRACTICE-III</td>
<td><input type="text" name="btp3" size="30"></td>
</tr>

<tr>
<td>COMMUNICATION SKILLS AND SOFT SKILLS(CSS)-2</td>
<td><input type="text" name="css2" size="30"></td>
</tr>

<tr>
<td>INFO & COMM TECH(ICT)-II, INTERNET FUNDAMENTALS AND WEB TOOLS</td>
<td><input type="text" name="ict2ifw" size="30"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>