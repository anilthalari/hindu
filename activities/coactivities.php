



<table border="1">
 <tr>
    <th>fname</th>
	<th>admissionnumber</th>
	<th>rollnumber</th>
	<th>course</th>
	<th>activities</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","testdb");
$set=$_POST['search'];
$get=$_POST['search2'];
if($set){
$show="SELECT * FROM regi where course='$set' AND activities='$get' ";
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
	echo $rows['course'];
	echo "</td>";
	echo "<td>";
	echo $rows['activities'];
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
<h1>Activities</h1>
<form action="" method="post">
<label> Course:</label>
<input type="text" name="search"/>
<label> Activities:</label>
<input type="text" name="search2"/>
<button>search</button>

</form>
</body>
</html>