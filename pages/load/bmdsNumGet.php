<?php  
$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['authCode'])) {
    $authCode = $_GET['authCode'];

    $sql3 = "SELECT bmdsNum FROM payments WHERE pw = '" .$authCode. "'";
    $result3 = mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_array($result3)[0];

    echo $row3;
}