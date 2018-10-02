



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>Economics-IV Bank & International Trade</th>
	<th>Mathemetics-IV Real Analysis</th>
	<th> Statistics-IV Statistical informatical</th>
	<th> Statistics-IV Statistical informatical(lab)</th>
	<th> Analytical Skills</th>
	<th> Comminication&Soft skills-III</th>
	<th> Entrepreneurship</th>
	<th> Leadership Education</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM ba4 where admissionnumber='$set'";
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
	echo $rows['e4bit'];
	echo "</td>";
	echo "<td>";
	echo $rows['m4ra'];
	echo "</td>";
	echo "<td>";
	echo $rows['s4si'];
	echo "</td>";
	echo "<td>";
	echo $rows['s4sip'];
	echo "</td>";
	echo "<td>";
	echo $rows['as'];
	echo "</td>";
	echo "<td>";
	echo $rows['css3'];
	echo "</td>";
	echo "<td>";
	echo $rows['ep'];
	echo "</td>";
	echo "<td>";
	echo $rows['le'];
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