<?php
// Cek apakah form sudah disubmit
if (isset($_GET['submit'])) {
    // Ambil data dari form
    $nama = htmlspecialchars($_GET['nama']);
    $ketua = htmlspecialchars($_GET['ketua']);
    $wakil = htmlspecialchars($_GET['wakil']);
    $bendahara = htmlspecialchars($_GET['Bendahara']);
    $sekertaris = htmlspecialchars($_GET['Sekertaris']);
    
    // Data yang akan disimpan
    $data = "Nama: $nama\n";
    $data .= "Ketua Kelas: $ketua\n";
    $data .= "Wakil Ketua Kelas: $wakil\n";
    $data .= "Bendahara: $bendahara\n";
    $data .= "Sekertaris: $sekertaris\n";
    $data .= "---------------------------\n";

    // Tentukan path file untuk menyimpan hasil voting
    $filePath = "hasil_vote.txt";  // Path ke file di dalam folder data

    // Coba buka file untuk menulis
    $file = fopen($filePath, "a");  // Mode "a" untuk menambahkan data jika file ada

    if ($file) {
        // Tulis data ke file
        fwrite($file, $data);
        fclose($file);

        // Beri pesan sukses setelah data disimpan
        echo "<script>alert('Terima kasih sudah memberikan suara!'); window.location.href = 'demokrasi.html';</script>";
    } else {
        // Jika gagal membuka file, tampilkan pesan error
        echo "Gagal membuka file untuk menulis!";
    }
}
?>