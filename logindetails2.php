<?php
ob_start();
$dbname = "covermart";
$conn = mysqli_connect("localhost", "root", "",$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br/>";
$em=$_POST["email2"];
$pwd=$_POST["password2"];

$sql = "SELECT * FROM logindetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
    {
     if($em==$row["Email"] && $pwd==$row["Password"])
     {
        header("location:checkout.html");
     }
    }
} 
else 
{
    echo "0 results";
}
$conn->close();