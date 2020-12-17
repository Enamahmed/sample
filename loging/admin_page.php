<?php 
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "loging_page";

$conn = new mysqli($servername, $username, $password, $dbname);
error_reporting(0);
$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$designation = $_GET['designation'];
$address = $_GET['address'];

if(isset($_GET['submit'])){
  $id = $_GET['id'];
  $name = $_GET['name'];
  $email = $_GET['email'];
  $designation = $_GET['designation'];
  $address = $_GET['address'];
  $query=" UPDATE `employee` SET `name`='$name',`email`='$email',`designation`='$designation',`address`='$address' WHERE `id`='$id'";
   $data=mysqli_query($conn,$query);
  if($data){
     header('Location: table.php');
  }
  else{
    echo "not updated";
  }
  }
 mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>

<h2>Update info</h2>

<form action=" "method="GET">

<label for="id"> Id:</label><br>
  <input type="text" id="id" name="id" value="<?php echo" $id" ?>" required><br>
  <label for="name"> Full Name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo" $name" ?>" required><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="<?php echo" $email" ?>"required><br>

  <label for="designation">Designation:</label><br>
  <input type="text" id="designation" name="designation" value="<?php echo" $designation" ?>"required><br>

  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value="<?php echo" $address" ?>" required><br><br>

  <input type="submit" class="submit" name="submit" value="Update">
   

</form> 


</body>
</html>