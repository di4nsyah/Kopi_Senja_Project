<?php
require_once 'config/db.php';

$kategori_filter = '';
$sql_tambahan = '';

if (isset($_GET['kategori'])) {
    $kategori_filter = mysqli_real_escape_string($conn, $_GET['kategori']);
    $sql_tambahan = "WHERE kategori = '$kategori_filter'";
}

$kategori_list = [
    '' => 'Semua',
    'Signature Coffee' => 'Signature Coffee',
    'Classic Coffee' => 'Classic Coffee',
    'Non-Coffee' => 'Non-Coffee',
    'Snack' => 'Snack',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Menu | Kopi Senja</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'include/navbar.php'; ?>

    <section id="full-menu">
        <div class="container">
            <div class="page-heading">
                <span class="eyebrow">Katalog Kami</span>
                <h1>Pilih Menu Favoritmu</h1>
                <p>Diseduh dengan hati-hati, disajikan untuk menemani setiap sesimu di Kopi Senja.</p>
            </div>

            <div class="filter-tabs" role="tablist">
                <?php foreach ($kategori_list as $value => $label): ?>
                    <a href="<?php echo $value === '' ? 'menu.php' : 'menu.php?kategori=' . urlencode($value); ?>"
                       class="filter-chip <?php echo ($kategori_filter === $value) ? 'is-active' : ''; ?>"
                       role="tab"
                       aria-selected="<?php echo ($kategori_filter === $value) ? 'true' : 'false'; ?>">
                        <?php echo htmlspecialchars($label); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="menu-catalog-grid">
                <?php
                $query = "SELECT * FROM menu $sql_tambahan ORDER BY nama_item ASC";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <article class="menu-item-card">
                            <div class="menu-item-card__media">
                                <img src="assets/menu/<?php echo $row['gambar']; ?>" alt="<?php echo htmlspecialchars($row['nama_item']); ?>">
                            </div>
                            <div class="menu-item-card__body">
                                <div class="menu-item-card__head">
                                    <h3><?php echo htmlspecialchars($row['nama_item']); ?></h3>
                                    <span class="menu-price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></span>
                                </div>
                                <p><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                                <a href="order.php?id=<?php echo $row['id']; ?>" class="btn-sl">Pesan Sekarang</a>
                            </div>
                        </article>
                    <?php }
                } else { ?>
                    <div class="menu-empty">
                        <div class="menu-empty__icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3h13v8a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V3zm13 2v4h1.5a2.5 2.5 0 0 0 0-5H17zM4 19h13v2H4v-2z"/>
                            </svg>
                        </div>
                        <p>Menu untuk kategori ini belum tersedia. Coba kategori lainnya ya.</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>