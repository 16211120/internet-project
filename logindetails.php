<?php
ob_start();
$dbname = "covermart";

$conn = mysqli_connect("localhost", "root", "",$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$em=$_POST["email"];
$pwd=$_POST["password"];

$sql = "INSERT INTO logindetails (FirstName, LastName, Email, Password) VALUES ('$fn', '$ln','$em','$pwd')";

 if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
   header("location:checkout.html");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
