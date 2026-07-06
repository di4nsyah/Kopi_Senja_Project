<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Senja | Teman Setia Hari-harimu</title>
    <meta name="description" content="Kopi Senja — kedai kopi artisan dan ruang kerja santai untuk mahasiswa & pekerja muda. Wifi kencang, colokan di setiap meja, kopi lokal pilihan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php include 'include/navbar.php'; ?>

    <section id="hero">
        <div class="hero-bg">
            <img src="assets/img/premium_photo-1683309565422-77818a287060.jpg" alt="Suasana kedai Kopi Senja">
        </div>
        <div class="hero-overlay"></div>

        <div class="hero-card">
            <span class="hero-card__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,248,241,1)"><path d="M10.8193 8.42654C10.0602 7.34217 9.77392 6.55513 9.71179 5.98243C9.6531 5.44149 9.78522 5.01294 10.0473 4.59929C10.3303 4.15244 10.755 3.73687 11.2954 3.24643C11.8004 2.78803 12.4323 2.24339 12.9281 1.62639L11.369 0.373657C10.9532 0.891134 10.4413 1.32064 9.95118 1.76549C9.41712 2.25024 8.80225 2.82728 8.35773 3.52902C7.89217 4.26395 7.60866 5.13997 7.72346 6.19813C7.83481 7.22454 8.31113 8.33114 9.18085 9.57351L10.8193 8.42654ZM12.0691 5.39666C12.3539 4.71314 12.9313 4.02758 13.8492 3.24077L15.1508 4.75928C14.3187 5.47247 14.0211 5.91191 13.9153 6.16589C13.8112 6.41559 13.8802 6.66497 13.9502 6.91319C14.0337 7.20908 14.1728 7.70231 14.1639 8.23544C14.1522 8.94083 13.9104 9.6872 13.3321 10.5547L11.6679 9.44533C12.0896 8.81285 12.1603 8.43422 12.1642 8.20211C12.1691 7.907 12.0921 7.74146 11.9674 7.24256C11.8478 6.76427 11.7573 6.14506 12.0691 5.39666ZM6.14205 9.99985C6.61127 9.68577 7.19166 9.52606 7.73387 9.39563L7.26613 7.4511C6.45314 7.64666 5.71471 7.91182 5.15413 8.25779C4.64408 8.57258 4 9.13581 4 9.99993C4 10.7262 4.48572 11.306 5.06549 11.6857C5.02301 11.8687 5 12.0596 5 12.2576C5 13.238 5.41805 14.0646 6.14274 14.6786C6.03632 14.9777 5.98811 15.3119 6.00331 15.6465C5.22587 15.7972 4.46698 16.0193 3.83335 16.3097C3.40087 16.5079 2.97509 16.7612 2.64304 17.0874C2.30876 17.4157 2 17.8913 2 18.5C2 18.927 2.18863 19.2717 2.37382 19.5093C2.56286 19.7519 2.8059 19.9586 3.05811 20.1338C3.56429 20.4854 4.24239 20.8028 5.0167 21.0702C6.57504 21.6084 8.68585 22 11 22C14.3273 22 16.6627 21.6161 18.1899 21.2177C18.9534 21.0185 19.5137 20.816 19.894 20.6568C20.1036 20.5691 20.3141 20.4759 20.5102 20.3601C20.5209 20.3537 19.4817 18.6448 19.4864 18.642C18.9216 18.9361 18.2983 19.1224 17.6851 19.2824C16.3373 19.634 14.1727 20 11 20C8.89587 20 7.00668 19.6416 5.6696 19.1798C5.13841 18.9964 4.58196 18.7818 4.12894 18.4405C4.24432 18.3492 4.41971 18.241 4.66665 18.1278C5.22462 17.8721 5.98958 17.6623 6.80607 17.5366C7.03515 17.7796 7.30872 17.994 7.62113 18.1763C8.58641 18.7394 9.91268 19 11.5 19C12.81 19 13.7578 18.8682 14.3982 18.7263C14.7536 18.6476 15.1117 18.5587 15.4402 18.3979C15.4434 18.3964 14.5589 16.6026 14.5589 16.6026C14.3651 16.6735 14.1673 16.729 13.9657 16.7737C13.4775 16.8818 12.6753 17 11.5 17C10.0873 17 9.16359 16.7606 8.62887 16.4487C8.20348 16.2006 8.04009 15.9254 8.00673 15.6255C8.87463 15.8783 9.90235 16 11.0625 16C12.5261 16 13.5815 15.8565 14.2908 15.7033C14.6765 15.62 15.0664 15.5241 15.4255 15.3566C15.4458 15.3469 14.5678 13.5498 14.5678 13.5498C14.513 13.5722 14.2892 13.6575 13.8686 13.7483C13.3082 13.8694 12.3949 14 11.0625 14C9.45935 14 8.39107 13.7356 7.76003 13.3767C7.28904 13.1088 7.08228 12.8089 7.02081 12.487C8.26048 12.8135 9.82491 12.9999 11.5 12.9999C13.3167 12.9999 15.0016 12.7806 16.2832 12.4022L15.7168 10.4841C14.6626 10.7954 13.1762 10.9999 11.5 10.9999C9.77625 10.9999 8.25501 10.7836 7.19789 10.4584C6.69889 10.3048 6.35214 10.1417 6.14205 9.99985ZM17.5905 10.7457C18.8029 10.6355 19.2497 10.934 19.3939 11.0885C19.543 11.2483 19.5952 11.496 19.5299 11.7573C19.4137 12.2219 19.0872 12.6724 18.5567 13.0863C18.0281 13.4988 17.3563 13.8266 16.6839 14.0506L17.3161 15.9481C18.1437 15.6723 19.0344 15.2504 19.787 14.6631C20.5378 14.0773 21.2113 13.278 21.4701 12.2424C21.6547 11.5039 21.5819 10.5016 20.8561 9.72387C20.1252 8.94081 18.9471 8.61417 17.4095 8.75396L17.5905 10.7457Z"></path></svg>
            </span>
            <div>
                <strong>Buka Sekarang</strong>
                <span>Senin–Jumat, 08.00–20.00</span>
            </div>
        </div>

        <div class="container hero-content">
            <span class="eyebrow">Kedai Kopi &amp; Ruang Kerja Santai</span>
            <h1>Kopi Senja</h1>
            <p>Tempat mahasiswa dan pekerja muda menyeduh ide — wifi kencang, colokan di setiap meja, dan kopi lokal pilihan yang disangrai setiap hari.</p>

            <div class="hero-cta">
                <a href="#menu" class="btn">Pesan Sekarang</a>
                <a href="#location" class="btn btn--outline">Lihat Lokasi</a>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Kenapa Kopi Senja</span>
                <h2>Betah dari Pagi Sampai Senja</h2>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-card__icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,248,241,1)"><path d="M0.689453 6.99659C3.78027 4.49704 7.71526 3 11.9999 3C16.2845 3 20.2195 4.49704 23.3104 6.99659L22.0536 8.55252C19.3062 6.3307 15.8085 5 11.9999 5C8.19133 5 4.69356 6.3307 1.94617 8.55252L0.689453 6.99659ZM3.83124 10.8864C6.0635 9.08119 8.90544 8 11.9999 8C15.0944 8 17.9363 9.08119 20.1686 10.8864L18.9118 12.4424C17.023 10.9149 14.6183 10 11.9999 10C9.38151 10 6.97679 10.9149 5.08796 12.4424L3.83124 10.8864ZM6.97304 14.7763C8.34673 13.6653 10.0956 13 11.9999 13C13.9042 13 15.6531 13.6653 17.0268 14.7763L15.7701 16.3322C14.7398 15.499 13.4281 15 11.9999 15C10.5717 15 9.26002 15.499 8.22975 16.3322L6.97304 14.7763ZM10.1148 18.6661C10.63 18.2495 11.2858 18 11.9999 18C12.714 18 13.3698 18.2495 13.885 18.6661L11.9999 21L10.1148 18.6661Z"></path></svg>
                    </span>
                    <h3>Wifi Kencang</h3>
                    <p>Koneksi stabil untuk video call, kerja kelompok, sampai deploy proyek kuliah.</p>
                </div>

                <div class="feature-card">
                    <span class="feature-card__icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,248,241,1)"><path d="M13 18V20H19V22H13C11.8954 22 11 21.1046 11 20V18H8C5.79086 18 4 16.2091 4 14V10H20V14C20 16.2091 18.2091 18 16 18H13ZM16 6H19C19.5523 6 20 6.44772 20 7V9H4V7C4 6.44772 4.44772 6 5 6H8V2H10V6H14V2H16V6ZM12 14.5C12.5523 14.5 13 14.0523 13 13.5C13 12.9477 12.5523 12.5 12 12.5C11.4477 12.5 11 12.9477 11 13.5C11 14.0523 11.4477 14.5 12 14.5Z"></path></svg>
                    </span>
                    <h3>Colokan di Setiap Meja</h3>
                    <p>Nggak perlu rebutan colokan — laptop dan HP tetap aman ngecas sepanjang hari.</p>
                </div>

                <div class="feature-card">
                    <span class="feature-card__icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,248,241,1)"><path d="M4 12H7C8.10457 12 9 12.8954 9 14V19C9 20.1046 8.10457 21 7 21H4C2.89543 21 2 20.1046 2 19V12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V19C22 20.1046 21.1046 21 20 21H17C15.8954 21 15 20.1046 15 19V14C15 12.8954 15.8954 12 17 12H20C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12Z"></path></svg>
                    </span>
                    <h3>Playlist Senja</h3>
                    <p>Kurasi musik santai yang menemani fokus tanpa bikin ngantuk.</p>
                </div>

                <div class="feature-card">
                    <span class="feature-card__icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,248,241,1)"><path d="M16 3H8C5.79086 3 4 4.79086 4 7V8C6.76142 8 9 10.2386 9 13H15C15 10.2386 17.2386 8 20 8V7C20 4.79086 18.2091 3 16 3ZM20 10C18.3431 10 17 11.3431 17 13V16H15V15H9V16H7V13C7 11.3431 5.65685 10 4 10C2.34315 10 1 11.3431 1 13C1 14.3062 1.83481 15.4175 3 15.8293V21H5V20H19V21H21V15.8293C22.1652 15.4175 23 14.3062 23 13C23 11.3431 21.6569 10 20 10Z"></path></svg>
                    </span>
                    <h3>Meja Komunal</h3>
                    <p>Ruang duduk lega untuk diskusi kelompok, meeting santai, atau kerja solo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ MENU ============ -->
    <section id="menu">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Menu Kami</span>
                <h2>Menu Favorit</h2>
                <p class="section-subtitle">Diseduh dari biji kopi lokal yang disangrai setiap hari di kedai kami.</p>
            </div>

            <?php
            require_once 'config/db.php';

            $query = "SELECT * FROM menu";
            $result = mysqli_query($conn, $query);
            ?>

            <div class="menu-grid">
                <?php
                $query = "SELECT * FROM menu LIMIT 6";
                $result = mysqli_query($conn, $query);
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <article class="menu-card"> <img src="assets/img/<?php echo $row['gambar']; ?>" alt="<?php echo htmlspecialchars($row['nama_item']); ?>">
                            
                            <h3><?php echo htmlspecialchars($row['nama_item']); ?></h3>
                            <p><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                            
                            <p class="menu-price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                            
                            <a href="order.php?id=<?php echo $row['id']; ?>" class="btn-sl">Pesan</a>
                        </article>
                    <?php } 
                } else {
                    echo"<p>Menu belum tersedia.</p>";
                }
                ?>
            </div>

            <a href="menu.php" class="btn btn--outline">Lihat Semua Menu</a>
        </div>
    </section>

    <!-- ============ ABOUT / FILOSOFI ============ -->
    <section id="about">
        <span class="eyebrow">Filosofi Kami</span>
        <h2>Kopi Bukan Sekadar Minuman</h2>
        <p>Kami percaya kopi adalah sebuah jeda — waktu untuk menepi sejenak dari kesibukan. Biji kopi lokal pilihan yang disangrai setiap hari di kedai kami memastikan kesegaran di setiap seduhan, sementara ruang yang kami bangun dirancang untuk jadi tempat pulang kedua bagi mahasiswa dan pekerja muda yang butuh fokus tanpa terburu-buru.</p>
    </section>

    <!-- ============ TESTIMONI ============ -->
    <section id="testimoni">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Kata Mereka</span>
                <h2>Cerita dari Pelanggan Setia</h2>
            </div>

            <div class="testimoni-grid">
                <blockquote>
                    <p>&ldquo;Kopi Senja selalu menjadi teman setia saya di sore hari. Rasanya yang khas membuat saya selalu kembali.&rdquo;</p>
                    <footer>— Rina, Mahasiswi</footer>
                </blockquote>

                <blockquote>
                    <p>&ldquo;Wifi kencang, colokan banyak, playlist-nya juga enak buat nemenin kerja sampai sore.&rdquo;</p>
                    <footer>— Dimas, Pekerja Lepas</footer>
                </blockquote>

                <blockquote>
                    <p>&ldquo;Tempat favorit buat diskusi kelompok. Kopi tubruknya jadi andalan tiap minggu.&rdquo;</p>
                    <footer>— Wulan, Mahasiswi</footer>
                </blockquote>
            </div>

            <h3 class="instagram-heading">Instagram Feed</h3>
            <div class="instagram-grid">
                <img src="assets/img/710298393_17885190609566859_5066960837439299090_n.jpg" alt="Foto Instagram Kopi Senja 1">
                <img src="assets/img/723238854_17886718308566859_7490783582101588892_n.jpg" alt="Foto Instagram Kopi Senja 2">
                <img src="assets/img/708537477_17884463199566859_888272793235757797_n.jpg" alt="Foto Instagram Kopi Senja 3">
            </div>
        </div>
    </section>

    <!-- ============ LOKASI ============ -->
    <section id="location">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Temukan Kami</span>
                <h2>Lokasi &amp; Jam Buka</h2>
            </div>

            <div class="map-container">
                <!-- Ganti src di bawah dengan link embed Google Maps kedai kamu -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1047.1018865376006!2d106.7992193578439!3d-6.244985644920231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1b932eb9e11%3A0xfe0edbd535b28595!2sObihiro%20nikudon!5e1!3m2!1sid!2sid!4v1782984376729!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

            <div class="location-details">
                <div>
                    <h3>Jam Operasional</h3>
                    <table class="hours-table">
                        <tr>
                            <td>Senin – Jumat</td>
                            <td>08:00 – 20:00</td>
                        </tr>
                        <tr>
                            <td>Sabtu – Minggu</td>
                            <td>09:00 – 22:00</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h3>Kontak</h3>
                    <p>
                        <a href="https://wa.me/6212345678900" class="contact-link" target="_blank" rel="noopener">
                            WhatsApp: +62 123 4567 890
                        </a>
                    </p>
                    <p style="margin-top: 0.75rem;">
                        Wisma Nasional, Jl. Melawai 5 No.14 Blk M, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>