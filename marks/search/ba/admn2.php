



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-II</th>
	<th>General telugu-II</th>
	<th> Economics&Micro Economics-II</th>
	<th> Mathematic-Solid Geometry-II</th>
	<th> StatisticsProbability Mathematical Expect-II</th>
	<th> StatisticsProbabilityMathematical Expect-II LAB</th>
	<th> Comminication&Soft Skills-I</th>
	<th> Info Communication Tech-I</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM ba2 where admissionnumber='$set'";
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
	echo $rows['ge2'];
	echo "</td>";
	echo "<td>";
	echo $rows['gt2'];
	echo "</td>";
	echo "<td>";
	echo $rows['e2me2'];
	echo "</td>";
	echo "<td>";
	echo $rows['m2sg'];
	echo "</td>";
	echo "<td>";
	echo $rows['s2mepd'];
	echo "</td>";
	echo "<td>";
	echo $rows['s2mepdlab'];
	echo "</td>";
	echo "<td>";
	echo $rows['css1'];
	echo "</td>";
	echo "<td>";
	echo $rows['ict1'];
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