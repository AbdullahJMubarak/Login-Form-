<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab2";
$email= $_POST["email"];
$passw= md5($_POST["password"]);
$name=$_POST["name"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM user WHERE email='$email'";

$result = mysqli_query($conn, $sql);



    $row = mysqli_fetch_assoc($result);

    if ($row['email'] == $email ) {

        echo "change the email it's already exist";
    }else{

$sql = "INSERT INTO user ( email,name,password)
VALUES ( '$email','$name','$passw')";

if ($conn->query($sql) === TRUE) {
  echo "HELLO $name";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>