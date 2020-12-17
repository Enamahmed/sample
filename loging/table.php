<!DOCTYPE html>
<html>
  <head></head>

<body>
<h2>School Students Info</h2>
<table s style="width:50%";float:left; border="2"; >
  <tr>
  <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Designation</th>
    <th>Address</th>
    <th colspan="2%"> Operation</th>
   
  </tr>

<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "loging_page";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// error_reporting(0);
$query="SELECT * FROM employee";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0){
    while($result=mysqli_fetch_assoc($data))
    {
        echo"
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['designation']."</td>
        <td>".$result['address']."</td>
       
         <td> <a href='admin_page.php? id=$result[id]&name=$result[name]&email=$result[email]&designation=$result[designation]&address=$result[address]'>
         <input type='submit' value= 'update'id='updatebtn'></a></td>
        
        <td> <a href='delete.php? na=$result[name]'>DELETE</a> 
        </td>
        </tr>
        <br>";
        
    } 
  }
    else{
        echo "No Records found";
    }
 
?>
</table>

</body>
</html>