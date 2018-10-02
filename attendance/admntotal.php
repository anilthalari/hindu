



<table border="1">
 <tr>
    <th>fname</th>
	<th>admissionnumber</th>
	<th>rollnumber</th>
	<th>date</th>
	<th>course</th>
	<th>attendence</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","testdb");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM anil where admissionnumber='$set'";
$result=mysqli_query($conn,$show);

while($rows=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>";
    echo $rows['fname'];
    echo "</td>";
	echo "<td>";
    echo $rows['admissionnumber'];
	echo "</td>";
	echo "<td>";
	echo $rows['rollnumber'];
	echo "</td>";
	echo "<td>";
	echo $rows['date'];
	echo "</td>";
	echo "<td>";
	echo $rows['course'];
	echo "</td>";
	echo "<td>";
	echo $rows['attendence'];
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
<label> Admission Number </label>
<input type="text" name="search"/>
<button>search</button>

</form>
</body>
</html>