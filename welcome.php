



<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab2";
$email= $_POST["email"];
$pass= md5($_POST["password"]);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['email']) && isset($_POST['password'])) {

   

    
        $sql = "SELECT * FROM user WHERE email='$email' && password='$pass'";

        $result = mysqli_query($conn, $sql);

        

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] == $email && $row['password'] == $pass) {

                echo "Logged in!";

                

             

            }else{

               echo "enter the correct email and password";

               

            }
        } 
           

      
        

    

?>


