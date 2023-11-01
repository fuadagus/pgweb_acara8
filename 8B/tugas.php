
<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgweb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM latihan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border='1px'><tr>
<th>Kecamatan</th>
<th>Latitude</th>
<th>Longitude</th>
<th>Luas</th>
<th>Jumlah Penduduk</th>
"

;
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
    <td>".$row["kecamatan"]."</td>
    <td>". $row["luas"]."</td>
    <td>". $row["latitude"]."</td>
    <td>". $row["longitude"]."</td>
    <td align='right'>". $row["jumlah_penduduk"]."</td>
    </tr>";
}
 echo "</table>";
} else {
echo "0 results";
}
$conn->close();