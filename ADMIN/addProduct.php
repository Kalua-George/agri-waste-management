// addProduct.php
<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['name']) && !empty($data['price']) && !empty($data['image'])) {
    $newProduct = [
        "id" => time(), // Using current timestamp as ID
        "name" => $data['name'],
        "price" => (float)$data['price'],
        "image" => $data['image']
    ];

    // Load existing products from JSON
    $jsonFile = 'products.json';
    $products = json_decode(file_get_contents($jsonFile), true);
    $products[] = $newProduct;

    // Save updated products back to JSON
    if (file_put_contents($jsonFile, json_encode($products, JSON_PRETTY_PRINT))) {
        echo json_encode(['success' => true, 'message' => 'Product added successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save product.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid product data.']);
}
?>
