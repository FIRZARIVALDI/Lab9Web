<?php require_once __DIR__ . '/helpers.php'; require_once __DIR__ . '/header.php'; ?>
<section class="content">
 <h2>Pemakaian helpers di halaman kedua</h2>
 <p>Harga setelah diskon 10%: <?= formatRupiah(500000 - hitungDiskon(500000)) ?></p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
