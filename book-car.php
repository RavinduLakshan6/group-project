<?php
// Database credentials
$servername = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "reantcar"; 


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phonNum=$_POST['mobile'];
$nic=$_POST['nic'];
$date=$_POST['Date'];
$carModel=$_POST['car_model'];



$sql="INSERT INTO  orderdetails (fullname, email, mobile, nic, datey, carModel)
VALUES
('$fullname','$email','$phonNum','$nic','$date','$carModel')";



if (!mysqli_query($conn, $sql))
{
die('Error: ' . mysqli_error($conn));
}
echo "<script>
        alert('Your Order Successfully added!');
        window.location.href = 'Home.php';
    </script>";


    exit();

mysqli_close($conn);

?>
