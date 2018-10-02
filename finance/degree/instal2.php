



<table border="1">
 <tr>
    <th>fname</th>
	<th>admissionnumber</th>
	<th>course</th>
	<th>year</th>
	<th>instal2</th>
	<th>fee</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","testdb");
$set=$_POST['search'];
$get=$_POST['search2'];
if($set){
$show="UPDATE dfinance SET instal2='$set' where admissionnumber='$get'";
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
	echo $rows['instal2'];
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
<label> Instal2</label>
<input type="text" name="search"/>
<label> Admission Number</label>
<input type="text" name="search2"/>
<button>search</button>

</form>
</body>
</html>