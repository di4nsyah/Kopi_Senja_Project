<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Senja | Teman Setia Hari-harimu</title>
</head>
<body>
    <?php include 'include/navbar.php'; ?>

    <section id="hero">
        <div class="background-image">
            <img src="assets/images/hero-image.jpg" alt="Gambar Hero">
        </div>
        <div class="hero-text">
            <h1>Kopi Senja</h1>
            <p>Kopi artisan yang diseduh dengan cinta,<br>siap menemani produktivitasmu.</p>
            <button>Pesan Sekarang</button>
        </div>
    </section>

    <section id="menu">
        <h2>Menu Favorit</h2>
        <div class="menu-grid">
            <article>
                <h3>Kopi Susu Senja</h3>
                <p>Espresso dengan campuran susu creamy dan gula aren.</p>
                <p>Rp 18.000</p>
            </article>
            <article>
                <h3>Americano</h3>
                <p>Espresso murni dengan air panas yang menyegarkan.</p>
                <p>Rp 15.000</p>
            </article>
            <article>
                <h3>Caramel Macchiato</h3>
                <p>Kopi dengan sirup karamel dan foam susu lembut.</p>
                <p>Rp 22.000</p>
            </article>
        </div>
        <a href="menu.php" class="btn">Lihat Semua Menu</a>
    </section>

    <section id="about">
        <h2>Filosofi Kopi Senja</h2>
        <p>Kami percaya bahwa kopi bukan hanya sekadar minuman, tapi sebuah jeda. Biji kopi lokal pilihan yang disangrai setiap hari di kedai kami memastikan kesegaran di setiap seduhan.</p>
    </section>

    <section id="testimoni">
        <h2>Kata Mereka Tentang Kopi Senja</h2>
        <blockquote>
            <p>"Kopi Senja selalu menjadi teman setia saya di sore hari. Rasanya yang khas membuat saya selalu kembali."</p>
            <footer>- Rina, Pelanggan Setia</footer>
        </blockquote>

        <h3>Instagram Feed</h3>
        <div class="instagram-grid">
            <img src="assets/img/feed1.jpg" alt="Foto Instagram 1">
            <img src="assets/img/feed2.jpg" alt="Foto Instagram 2">
            <img src="assets/img/feed3.jpg" alt="Foto Instagram 3">
        </div>
    </section>

    <section id="location">
        <h2>Lokasi Kami</h2>
        <div class="map-container">
            [Embed Google Maps di sini]
        </div>

        <h3>Jam Operasional</h3>
        <table>
            <tr>
                <td>Senin - Jumat</td>
                <td>08:00 - 20:00</td>
            </tr>
            <tr>
                <td>Sabtu - Minggu</td>
                <td>09:00 - 22:00</td>
            </tr>
        </table>

        <h3>Kontak</h3>
        <p>Whatsapp: +62 123 4567 890</a></p>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>