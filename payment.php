<?php
ob_start();
$dbname = "covermart";

$conn = mysqli_connect("localhost", "root", "",$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$ty=$_POST["type"];
$cn=$_POST["cc"];
$m=$_POST["month"];
$y=$_POST["year"];
$n=$_POST["no"];

$sql = "INSERT INTO paymentdetails (CCtype, CCNo, ExpMonth, ExpYear, VNo ) VALUES ('$ty', '$cn', '$m', '$y', '$n' )";

 if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
   header("location:placeorder.html");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
