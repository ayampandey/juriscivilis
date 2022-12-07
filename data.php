<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'clients';
$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
  die('Could not connect: ' .mysqli_connect_error());
}
echo "Connected successfully";
$nm=$_POST['Name'];
$ag=$_POST['Age'];
$add=$_POST['Address'];
$type=$_POST['Type_Of_Case'];
$contact=$_POST['Contact_Number'];
$em=$_POST['Email_ID'];
$app=$_POST['Appointment'];

$sql = "INSERT INTO client_data VALUES ('$nm','$ag','$add','$type','$contact','$em','$app')";
if(mysqli_query($conn,$sql)){
  echo '<script type="text/JavaScript">
  alert("Form Submitted");
  </script>'
  ; 
  }
  else {
    echo "Could not insert record: " .mysqli_error($conn);
  }
  mysqli_close($conn)
 ?>
