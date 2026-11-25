<?php require_once __DIR__ . '/helpers.php'; require_once __DIR__ . '/header.php'; ?>
<section class="content">
 <h2>Latihan Function (Bagian E)</h2>
 <ul>
  <li>36&deg;C = <?= konversiCelciusKeFahrenheit(36) ?>&deg;F</li>
  <li>Nilai 78 = predikat <?= tentukanStatusNilai(78) ?></li>
  <li>Total 3 x <?= formatRupiah(25000) ?> = <?= formatRupiah(hitungTotal(25000, 3)) ?></li>
  <li>Diskon 15% dari Rp 200.000 = <?= formatRupiah(hitungDiskon(200000, 15)) ?></li>
  <li>Escape: <?= e('<script>alert("uji")</script>') ?></li>
 </ul>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
