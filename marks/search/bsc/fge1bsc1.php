 <?php
$user = "root";
$pass = "";
$db = "marks";

// Create connection
$db = new mysqli('localhost', $user, $pass, $db);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM bsc1 WHERE ge1 < 35 ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Admission Number: " . $row["admissionnumber"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$db->close();
?> 