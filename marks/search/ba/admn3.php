



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-III</th>
	<th>General telugu-III</th>
	<th> Economics&Micro Economics NIncome EMP Money-III</th>
	<th> Mathematic-Absta ALLgebra-III</th>
	<th> Statistics Stastical Methods-III</th>
	<th> Statistics Stastical Methods-III LAB</th>
	<th> Comminication&Soft skills-II</th>
	<th> Info Communication Tech-II IF Web Tools</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM ba3 where admissionnumber='$set'";
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
	echo $rows['e2meniem'];
	echo "</td>";
	echo "<td>";
	echo $rows['m3aa3'];
	echo "</td>";
	echo "<td>";
	echo $rows['s3sm3'];
	echo "</td>";
	echo "<td>";
	echo $rows['s3sm3lab'];
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