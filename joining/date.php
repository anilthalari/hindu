



<table border="1">
 <tr>
    <th>fname</th>
	<th>admissionnumber</th>
	<th>course</th>
	<th>joiningdate</th>
	
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","testdb");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM regi where joiningdate='$set'";
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
	echo $rows['course'];
	echo "</td>";
	echo "<td>";
	echo $rows['joiningdate'];
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
<label>Joining Date:</label>
<input type="text" name="search"/>
<button>search</button>

</form>
</body>
</html>