<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br><br>"; 
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 98];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) { 
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br><br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$total = 0;
$jumlah = count($nilaiSiswa);

for ($i = 2; $i < $jumlah - 2; $i++) {
    $total += $nilaiSiswa[$i];
}

$rataRata = $total / ($jumlah - 4);

echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai (setelah mengabaikan 2 tertinggi & 2 terendah): $total <br>";
echo "Rata-rata nilai: $rataRata <br><br>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk; 
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.');

$skorPemain = 650;
$batasHadiah = 500;

if ($skorPemain > $batasHadiah) {
    $mendapatkanHadiah = "YA";
} else {
    $mendapatkanHadiah = "TIDAK";
}

echo "<br><br>Total skor pemain adalah: " . $skorPemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $mendapatkanHadiah;
?>
