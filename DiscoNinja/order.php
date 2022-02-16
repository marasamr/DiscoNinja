<?php



$con = mysqli_connect('localhost','root');

if($con) {
    echo ("Connection successful");
}
else{
    echo("Connection failed");
}

mysqli_select_db($con, 'ChicklaxUser');

$name = $_POST['name'];
$contact =$_POST['contact'];
$email =$_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

$query = "insert into customerdata (name,email,address,contact,password)
            values('$name','$email','$address','$contact','$password')";
    
mysqli_query($con,$query);

echo("$query");
header('location:index.php');


?>
