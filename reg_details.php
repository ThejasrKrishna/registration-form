<?php

    // Collect form data
    $Name = $_POST["Name"];
    $E_mail = $_POST["E_mail"];
    $Password = $_POST["Password"];
    $DOB = $_POST["DOB"];
    $Number = $_POST["Number"];
    $Languages = isset($_POST["Languages"]) ? implode(", ", $_POST["Languages"]) : "";
    $Gender = $_POST["Gender"];
    $Comments = $_POST["Comments"];
    $GovtId = $_POST["GovtId"];
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["Upload"]["name"]);
    // File upload handling (assuming the file is uploaded to the same directory as this script)
    $Upload = $_FILES["Upload"]["name"];
    move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file);

    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
    
    $conn = new mysqli('localhost', 'root', '', 'registration-form');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Create connection
    $stmt = $conn->prepare("INSERT INTO `reg-form`( `Name`, `E_mail`, `Password`, `DOB`, `Number`, `Languages`, `Gender`, `Comments`, `GovtId`, `Upload`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisssss", $Name, $E_mail,  $hashedPassword, $DOB, $Number, $Languages, $Gender, $Comments, $GovtId, $Upload);
 $execval = $stmt->execute();
if($execval)
echo "done";
else
echo "error";
   
 //header ('location: http://localhost/registraion_form/home.php');
    
 $stmt->close(); 
 $conn->close();
}
?>