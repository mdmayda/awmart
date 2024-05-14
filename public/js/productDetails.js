    document.getElementById('plusBtn').addEventListener('click', function () {
        var quantityInput = document.getElementById('quantityInput');
        var quantity = parseInt(quantityInput.value);
        quantityInput.value = quantity + 1;
        updateSubtotal();
    });

    document.getElementById('minusBtn').addEventListener('click', function () {
        var quantityInput = document.getElementById('quantityInput');
        var quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
            updateSubtotal();
        }
    });

    // Fungsi untuk menghitung subtotal berdasarkan harga produk dan jumlah yang dipilih
    function updateSubtotal() {
        var price = 100; // Ganti dengan harga produk sesuai kebutuhan
        var quantity = parseInt(document.getElementById('quantityInput').value);
        var subtotal = price * quantity;
        document.getElementById('subtotal').innerHTML = 'Subtotal: $' + subtotal;
    }