
<?php
include 'connect.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $prodName = $_POST['prodName'];
    $prodPrice = $_POST['prodPrice'];
    $contact = $_POST['contact'];

    // Handle file upload
    $targetDir = "uploads/"; // Directory where images will be saved
    $targetFile = $targetDir . basename($_FILES["prodImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an image
    $check = getimagesize($_FILES["prodImage"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo json_encode(["status" => "error", "message" => "File is not an image."]);
        $uploadOk = 0;
    }

    // Check if file upload is successful
    if ($uploadOk && move_uploaded_file($_FILES["prodImage"]["tmp_name"], $targetFile)) {
        // Insert into database with file path
        $sql = "INSERT INTO products (prodName, prodPrice, images, contact) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdss", $prodName, $prodPrice, $targetFile, $contact);

        echo 'successful';

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Product added successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error adding product: " . $conn->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Error uploading file."]);
    }

    $conn->close();
}
?>
