



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-II</th>
	<th>General Telugu-II</th>
	<th> Mathematics solid Geometry-II</th>
	<th> Statistics Mathemetical EXP & Probability-II Distri</th>
	<th> Computer science program in C-II</th>
	<th> Statistics Mathemetical EXP & Probability-II Distri(Lab)</th>
	<th> Computer science program in C-II(lab) </th>
	<th> Communication & soft skills-I</th>
	<th> info & communcation Technology-I</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM bsc2 where admissionnumber='$set'";
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
	echo $rows['m2sg'];
	echo "</td>";
	echo "<td>";
	echo $rows['s2mepd'];
	echo "</td>";
	echo "<td>";
	echo $rows['cs2pc'];
	echo "</td>";
	echo "<td>";
	echo $rows['s2mepdlab'];
	echo "</td>";
	echo "<td>";
	echo $rows['cs2pclab'];
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