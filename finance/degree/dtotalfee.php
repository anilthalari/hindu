



<table border="1">
 <tr>
    <th>Full Nameame</th>
	<th>Admission Number</th>
	<th>Course</th>
	<th>Year</th>
	<th>Instal1</th>
	<th>Instal2</th>
	<th>Instal3</th>
	<th>Total Fee</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","testdb");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM dfinance where admissionnumber='$set'";
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
	echo $rows['year'];
	echo "</td>";
	echo "<td>";
	echo $rows['instal1'];
	echo "</td>";
	echo "<td>";
	echo $rows['instal2'];
	echo "</td>";
	echo "<td>";
	echo $rows['instal3'];
	echo "</td>";
	echo "<td>";
	echo $rows['fee'];
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