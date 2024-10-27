<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $password_confirm =$_POST['password2'];

    // Check if passwords match
    if ($password !== $password_confirm) {
        echo 'Passwords do not match.';
    } else {
        // Hash the password
        $hashed_password = sha1($password);

        // Check if the email is already used
        $check_mail = "SELECT * FROM users WHERE email = '$email'";
        $response = $conn->query($check_mail);

        if ($response->num_rows > 0) {
            echo 'Email already exists'; 
        } else {
            // Insert new user into database
            $insert = "INSERT INTO users (username, role, password, email) VALUES ('$username', 'seller', '$hashed_password', '$email')";
            if ($conn->query($insert) === TRUE) {
                header("Location: ../index.php"); // Redirect after successful signup
            } else {
                echo 'Error creating account';
            }
        }
    }
}



if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    // Verify user credentials
    $verify = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $check = $conn->query($verify);


    if ($check->num_rows > 0) {
        session_start();
        $row = $check->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header('Location: http://localhost/ADMIN/admin.php'); // Redirect to dashboard or home after login
        exit();
    } else {
        echo 'Login failed, incorrect username or password';
    }
}
?>
