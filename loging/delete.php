<?php 
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "loging_page";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$name=$_GET['na'];
$query="DELETE FROM employee WHERE name='$name'";
$data=mysqli_query($conn,$query);

if($data){

    header('Location: table.php');
}
else{

    echo"sesh sob sesh";
}
?>