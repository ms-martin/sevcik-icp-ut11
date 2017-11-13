<!DOCTYPE html>
<html>

<head></head>

<body>

<?php
$host = "localhost";
$username = "id3451829_icp";
$dbpass = "element4";
$db = "id3451829_users";


$conn = new mysqli($host,$username,$dbpass,$db);

if($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
else echo "Connected!";

$firstname = $lastname = $email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);


    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) die("E-mail adress already used");

    $sql = "INSERT INTO users (email, password, firstname, lastname, registred) 
            VALUES ('$email','$password','$firstname','$lastname',CURRENT_DATE())";

    if($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</body>

</html>