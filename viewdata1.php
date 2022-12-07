<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'clients';
$conn = mysqli_connect($host,$user,$pass,$dbname);
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM client_data';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<h1 align='center'>Client Data</h1>";
  echo "<table border=1 align='center'>";
  echo "<th>NAME</th> <th>AGE</th> <th>ADDRESS</th> <th>TYPE OF CASE</th> <th>CONTACT</th> <th>EMAIL ID</th> <th>APPOINTMENT DATE</th>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>{$row['Name']}</td> <td>{$row['Age']}</td> <td>{$row['Address']}</td> <td>{$row['Type of Case']}</td> <td>{$row['Contact Number']}</td> <td>{$row['Email Address']}</td> <td>{$row['Appointment']}</td>
    </tr>";
  }
  echo "</table>";
} else {
  echo '0 results';
}

mysqli_close($conn);
?>
