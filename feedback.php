<?php
$servername = "localhost";
$database = "register";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
global $conn;

if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['contact'];
$feedback=$_POST['feedbacks'];

$sql = "INSERT INTO feedback VALUES ('$name','$email',$phno,'$feedback')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Feedback recieved!');</script>";
    echo "<script>window.location.href='home.html'</script>";

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//header("Location: sqlin.html");
}
mysqli_close($conn);
?>