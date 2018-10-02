



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-III</th>
	<th>General Telugu-III</th>
	<th> Mathematics Abstract algebra-III</th>
	<th> Statistics-III Statistical Methods-III</th>
	<th> Computer Science-IIIObjectOrientedProgrammingusing java-I</th>
	<th> Statistics-III Statistical Methods-III Lab</th>
	<th>ComputerScience-III ObjectOrientedProgrammingusingjava-I Lab) </th>
	<th> Communication & soft skills-II</th>
	<th> info&comm Tech-II,IF webtools</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM bsc3 where admissionnumber='$set'";
$result=mysqli_query($conn,$show);

while($rows=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>";
    echo $rows['class'];
    echo "</td>";
	echo "<td>";
    echo $rows['medium'];
	echo "</td>";
	echo "<td>";
	echo $rows['admissionnumber'];
	echo "</td>";
	echo "<td>";
	echo $rows['name'];
	echo "</td>";
	echo "<td>";
	echo $rows['rollnumber'];
	echo "</td>";
	echo "<td>";
	echo $rows['ge3'];
	echo "</td>";
	echo "<td>";
	echo $rows['gt3'];
	echo "</td>";
	echo "<td>";
	echo $rows['m3aa3'];
	echo "</td>";
	echo "<td>";
	echo $rows['s3sm3'];
	echo "</td>";
	echo "<td>";
	echo $rows['cs3oop'];
	echo "</td>";
	echo "<td>";
	echo $rows['s3sm3lab'];
	echo "</td>";
	echo "<td>";
	echo $rows['cs3ooplab'];
	echo "</td>";
	echo "<td>";
	echo $rows['css2'];
	echo "</td>";
	echo "<td>";
	echo $rows['ict2ifw'];
	echo "</td>";
	echo "</tr>";
	}
}
else{
	echo  "nothing found";
}
?>
</table>
<html>
<head>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="" method="post">
<label> Admission Number</label>
<input type="text" name="search"/>
<button>search</button>

</form>
</body>
</html>