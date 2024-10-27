const productlink = document.getElementById('productlink');
const reqlink = document.getElementById('requestlink');
const logslink = document.getElementById('logslink');

const product = document.getElementById('products');
const requests = document.getElementById('requests');
const logs = document.getElementById('logs');

// Initial setup to show only the products section
logs.style.display = "none";
requests.style.display = "none";
product.style.display = "block";

// Event listener for the listing requests link
reqlink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default link behavior
    logs.style.display = "none";
    requests.style.display = "block";
    product.style.display = "none";
});

// Event listener for the logs link
logslink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default link behavior
    logs.style.display = "block";
    requests.style.display = "none";
    product.style.display = "none";
});

// Event listener for the products link
productlink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default link behavior
    logs.style.display = "none";
    requests.style.display = "none";
    product.style.display = "block";
});
