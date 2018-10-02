



<table border="1">
 <tr>
    <th>class</th>
    <th>medium</th>
	<th>admissionnumber</th>
	<th>name</th>
	<th>rollnumber</th>
	<th>General English-I</th>
	<th>General telugu-I</th>
	<th> Micro Economics Consumer Behaviour</th>
	<th> Mathematics-I</th>
	<th> Differential Equation & Statistics-I</th>
	<th> Statistics-I Lab</th>
	<th> Enviromental Studies</th>
	<th> Human Values&ProfessionalEthics</th>
  </tr>
<?php
$conn=mysqli_connect("localhost","root","","marks");
$set=$_POST['search'];
if($set){
$show="SELECT * FROM ba1 where admissionnumber='$set'";
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
	echo $rows['ge1'];
	echo "</td>";
	echo "<td>";
	echo $rows['gt1'];
	echo "</td>";
	echo "<td>";
	echo $rows['mecb'];
	echo "</td>";
	echo "<td>";
	echo $rows['m1de1'];
	echo "</td>";
	echo "<td>";
	echo $rows['s1dsp1'];
	echo "</td>";
	echo "<td>";
	echo $rows['s1dsp1lab'];
	echo "</td>";
	echo "<td>";
	echo $rows['es'];
	echo "</td>";
	echo "<td>";
	echo $rows['hvpe'];
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