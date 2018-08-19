<?php
ob_start();
$dbname = "covermart";

$conn = mysqli_connect("localhost", "root", "",$dbname);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$com=$_POST["company"];
$add=$_POST["address"];
$city=$_POST["city1"];
$zip=$_POST["zip"];
$cou=$_POST["country1"];
$ph=$_POST["phone"];

$sql = "INSERT INTO billinginformation (FirstName, LastName, Company, Address, City, Zip, Country, PhoneNo) VALUES ('$fn', '$ln', '$com', '$add', '$city', '$zip', '$cou', '$ph')";

 if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
   header("location:checkout2.html");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
