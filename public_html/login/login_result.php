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

if($conn->connect_error) die("Error: " . $conn->connect_error);

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);


    $sql = "SELECT users.password FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows == 0) die("Ucet registrovany na danu mailovu adresu neexistuje.");

    $result = $result->fetch_assoc();

    if($result["password"] == $password) {
        echo "Prihlasenie prebehlo uspesne.";
    } else {
        die("Zadane heslo je nespravne.");
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