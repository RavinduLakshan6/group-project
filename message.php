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

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO comment(fname,email,cmessage) VALUES('$name','$email','$message')";

if(!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}

echo "<script>
        alert('Your message send!');
        window.location.href = 'Home.php';
    </script>";


    exit();

mysqli_close($conn);
?>