<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Marketplace</title>
    <style>
        /* Basic styles for layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            width: 80%;
            margin: 0 auto;
        }
        .product-item {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
        }
        .product-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Product Marketplace</h1>

    <!-- Display Products from Database -->
    <?php
    include 'connect.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch products
    $sql = "SELECT prodName, prodPrice, images, contact FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display products in a grid
        echo '<div class="product-grid">';
        while ($row = $result->fetch_assoc()) {
            // Display each product
            echo '<div class="product-item">';
            echo '<h2>' . htmlspecialchars($row['prodName']) . '</h2>';
            echo '<p>Price: $' . htmlspecialchars($row['prodPrice']) . '</p>';
            echo '<p>Seller: ' . htmlspecialchars($row['contact']) . '</p>';

            // Display image from file path
            if ($row['images']) {
                echo '<img src="' . htmlspecialchars($row['images']) . '" alt="' . htmlspecialchars($row['prodName']) . '">';
            } else {
                echo '<p>No image available</p>';
            }
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "<p>No products found.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
