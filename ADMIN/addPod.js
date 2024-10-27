// Admin.js
document.getElementById('prodAddForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('prodName').value;
    const price = document.getElementById('prodPrice').value;
    const image = document.getElementById('prodImage').value;
    const seller = document.getElementById('contact').value;

    const productData = {
        name: name,
        price: price,
        image: image,
        seller: seller
    };

    fetch('addProduct.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(productData)
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.success) {
            // Clear the form fields
            document.getElementById('addProductForm').reset();
        }
    })
    .catch(error => console.error('Error:', error));
});
