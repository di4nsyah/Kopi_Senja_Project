<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan | Kopi Senja</title>
    <meta name="description" content="Konfirmasi pesananmu di Kopi Senja sebelum dikirim ke dapur kami.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'include/navbar.php'; ?>

    <section id="checkout">
        <div class="container">
            <div class="page-heading">
                <span class="eyebrow">Satu Langkah Lagi</span>
                <h1>Konfirmasi Pesanan</h1>
                <p>Cek kembali pesananmu, isi nama, lalu kirim — kami siapkan begitu kamu sampai di kedai.</p>
            </div>

            <div class="checkout-grid">
                <div class="checkout-summary">
                    <h3>Ringkasan Pesanan</h3>
                    <div class="checkout-items" id="checkout-items">
                        <!-- diisi otomatis lewat JavaScript -->
                    </div>
                    <div class="checkout-total">
                        <span>Total Pembayaran</span>
                        <strong id="checkout-total">Rp 0</strong>
                    </div>
                </div>

                <form class="checkout-form" action="process-order.php" method="POST">
                    <h3>Data Pemesan</h3>

                    <div class="form-field">
                        <label for="customer_name">Nama Kamu</label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="mis. Rina Aulia" required>
                    </div>

                    <div class="form-field">
                        <label for="catatan">Catatan Tambahan (Opsional)</label>
                        <textarea id="catatan" name="catatan" rows="3" placeholder="mis. less sugar, tanpa es"></textarea>
                    </div>

                    <input type="hidden" name="cart_data" id="cart_data">

                    <button type="submit" class="btn btn--block">Konfirmasi Pesanan</button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="assets/js/cart.js"></script>
    <script>
        window.onload = function () {
            const container = document.getElementById('checkout-items');
            const totalEl = document.getElementById('checkout-total');
            let total = 0;

            if (typeof cart === 'undefined' || cart.length === 0) {
                container.innerHTML = '<p class="checkout-empty">Keranjangmu masih kosong. Yuk pilih menu dulu.</p>';
            } else {
                cart.forEach(item => {
                    const subtotal = item.price * item.qnty;
                    total += subtotal;
                    container.innerHTML += `
                        <div class="checkout-item">
                            <div>
                                <p class="checkout-item__name">${item.name}</p>
                                <p class="checkout-item__meta">${item.qnty} x Rp ${item.price.toLocaleString('id-ID')}</p>
                            </div>
                            <p class="checkout-item__subtotal">Rp ${subtotal.toLocaleString('id-ID')}</p>
                        </div>`;
                });
            }

            totalEl.innerText = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('cart_data').value = JSON.stringify(cart || []);
        };
    </script>
</body>
</html>