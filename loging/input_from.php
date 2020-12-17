<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "loging_page";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
include_once 'input_from.php';
if(isset($_POST['submit']))
{	 $name = $_POST['name'];
	 $name = $_POST['name'];
     $email = $_POST['email'];
     $designation = $_POST['designation'];
     $address = $_POST['address'];
     $password = $_POST['password'];
	 $query = "INSERT INTO employee (name,email,designation,address,password)
	 VALUES ('$name','$email','$designation','$address','$password')";
	 if (mysqli_query($conn, $query)) {
    header('Location: table.php');
		// echo "New record created successfully !";
	 } else {
        echo "Error: " . $query . "
        
" . mysqli_error($conn);
	 }
     mysqli_close($conn);
     }
    
    //  $result=mysqli_fetch_assoc($sql);
     
?>


<!DOCTYPE html>
<html>
<body>

<h2>Input Your employee Info</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "method="POST">

  <label for="name"> Full Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Jhon Doe" required><br>

  <label for="email">Email:</label><br>
  <input type="text"  name="email" placeholder="hoho@mail.com" required><br>

  <label for="designation">Designation:</label><br>
  <input type="text" id="designation" name="designation" placeholder="software eng."required><br>

  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" placeholder="Dhaka" required><br>

  <label for="password">Password</label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>

  <input type="submit" class="submit" name="submit" value="Submit">
</form> 


</body>
</html>
