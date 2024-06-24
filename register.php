<?php
include('phpconn.php');
// Check connection
global $conn;

if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}
$uname=$_POST['fname'];
$email=$_POST['femail'];
$phno=$_POST['phone'];
$pass=$_POST['fpassword'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$sql = "INSERT INTO customer VALUES ('$uname','$email',$phno,'$pass','$height','$weight')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registration Successful!');</script>";
    echo "<script>window.location.href='login.php'</script>";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//header("Location: sqlin.html");
}
mysqli_close($conn);
?>