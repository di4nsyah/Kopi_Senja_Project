<?php
require_once 'config/db.php';

$success       = false;
$message       = 'Halaman ini hanya bisa diakses melalui form pemesanan.';
$order_id      = null;
$total_harga   = 0;
$customer_name = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = trim($_POST['customer_name'] ?? '');
    $catatan       = trim($_POST['catatan'] ?? '');
    $cart_json     = $_POST['cart_data'] ?? '[]';

    $cart = json_decode($cart_json, true);

    if (empty($customer_name)) {
        $message = 'Nama pemesan wajib diisi.';
    } elseif (!is_array($cart) || count($cart) === 0) {
        $message = 'Keranjang kamu kosong, silakan pilih menu terlebih dahulu.';
    } else {
        foreach ($cart as $item) {
            $total_harga += ($item['price'] * $item['qnty']);
        }

        $customer_name_safe = mysqli_real_escape_string($conn, $customer_name);
        $catatan_safe        = mysqli_real_escape_string($conn, $catatan);
        $cart_json_safe       = mysqli_real_escape_string($conn, $cart_json);

        $query = "INSERT INTO orders (customer_name, order_details, catatan, total_harga, status) 
                  VALUES ('$customer_name_safe', '$cart_json_safe', '$catatan_safe', $total_harga, 'Pending')";

        if (mysqli_query($conn, $query)) {
            $success  = true;
            $order_id = mysqli_insert_id($conn);
        } else {
            $message = 'Terjadi kendala saat menyimpan pesanan. Silakan coba lagi.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $success ? 'Pesanan Diterima' : 'Pesanan Gagal'; ?> | Kopi Senja</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'include/navbar.php'; ?>

    <section class="status-page">
        <div class="container">
            <?php if ($success): ?>
                <div class="status-card status-card--success">
                    <div class="status-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.55 17.65 4.9 13l1.4-1.4 3.25 3.25 8.15-8.15 1.4 1.4z"/></svg>
                    </div>
                    <span class="eyebrow">Pesanan Diterima</span>
                    <h1>Terima kasih, <?php echo htmlspecialchars($customer_name); ?>!</h1>
                    <p>Pesananmu sudah masuk ke dapur kami. Silakan tunggu di meja, kami akan segera menyiapkannya.</p>

                    <div class="status-order-info">
                        <div>
                            <span>No. Pesanan</span>
                            <strong>#<?php echo str_pad($order_id, 4, '0', STR_PAD_LEFT); ?></strong>
                        </div>
                        <div>
                            <span>Total Pembayaran</span>
                            <strong>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></strong>
                        </div>
                    </div>

                    <div class="status-actions">
                        <a href="index.php" class="btn">Kembali ke Beranda</a>
                        <a href="menu.php" class="btn btn--outline">Pesan Lagi</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="status-card status-card--error">
                    <div class="status-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.3 5.71 12 12.01l-6.3-6.3-1.4 1.42 6.29 6.29-6.29 6.29 1.4 1.42 6.3-6.3 6.3 6.3 1.4-1.42-6.29-6.29 6.29-6.29z"/></svg>
                    </div>
                    <span class="eyebrow">Pesanan Gagal</span>
                    <h1>Ups, ada yang salah</h1>
                    <p><?php echo htmlspecialchars($message); ?></p>

                    <div class="status-actions">
                        <a href="menu.php" class="btn">Kembali ke Menu</a>
                        <a href="index.php" class="btn btn--outline">Ke Beranda</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>