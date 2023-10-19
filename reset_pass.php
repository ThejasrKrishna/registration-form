<?php
error_log(1);
error_reporting(1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration-form";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to securely hash passwords
    function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    // Get user input
    $email = $_POST['E_mail'];
    $oldPassword = $_POST['old_Password'];
    $newPassword = $_POST['new_Password'];
    $confirmPassword = $_POST['confirm_Password'];

    // Verify if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        die("New password and confirm password do not match");
    }

    // Hash the new password
    $hashedPassword = hashPassword($newPassword);

    // Check if the old password matches the one in the database
    // (You should have a proper user authentication mechanism in place)
    // For simplicity, this example assumes you have a table named 'users' with columns 'email' and 'password'
    $sql = "SELECT * FROM `reg-form` WHERE E_mail='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // echo $row['Password'];
        $check = password_verify($oldPassword, $row['Password']);
        echo $check;  
        if (password_verify($oldPassword, $row['Password'])) {
            // Update the password in the database
            $updateSql = "UPDATE `reg-form` SET password='$hashedPassword' WHERE E_mail='$email'";
            if ($conn->query($updateSql) === TRUE) {
                echo "Password updated successfully";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Old password is incorrect";
        }
    } else {
        echo "User not found";
    }

    // Close the database connection
    $conn->close();
}
?>
