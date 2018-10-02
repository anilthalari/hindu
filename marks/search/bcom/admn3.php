



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-III</th>
	<th>General Telugu-III</th>
	<th> Corporate Accounting-III</th>
	<th> Business Statistics_III</th>
	<th> Banking Theory and Practice-III</th>
	<th> Communication Skills&SoftSkills-II</th>
	<th> Info&Comm Tech-II,IF Webtools</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM bcom3 where admissionnumber='$set'";
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
	echo $rows['ca3'];
	echo "</td>";
	echo "<td>";
	echo $rows['bs3'];
	echo "</td>";
	echo "<td>";
	echo $rows['btp3'];
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