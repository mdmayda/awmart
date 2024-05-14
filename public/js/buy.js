
function incrementQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    updateSubtotal();
}

function decrementQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        updateSubtotal();
    }
}

function validateNumber(input) {
    var regex = /^[1-9]\d*$/;
    if (!regex.test(input.value)) {
        input.value = 1;
    }
    updateSubtotal();
}

function updateSubtotal() {
    var quantityInput = document.getElementById('quantityInput');
    var subtotal = document.getElementById('subtotal');
    var pricePerItem = 5500; // Harga satuan produk (misalnya Rp 5.500,00)
    var quantity = parseInt(quantityInput.value);
    var total = pricePerItem * quantity;
    subtotal.textContent = 'Rp ' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); // Format angka ke dalam format uang
    updateTotalSubtotal(quantity, total);
}

function updateTotalSubtotal(quantity, total) {
    var totalProducts = document.getElementById('totalProducts');
    var totalSubtotal = document.getElementById('totalSubtotal');
    totalProducts.textContent = quantity;
    totalSubtotal.textContent = 'Rp ' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); // Format angka ke dalam format uang
}

var totalElement = document.getElementById('total');
totalElement.textContent = 'Rp ' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

