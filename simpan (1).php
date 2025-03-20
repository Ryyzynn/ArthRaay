<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kritikSaran = trim($_POST["kritikSaran"]);

    if (!empty($kritikSaran)) {
        $file = "kritik_saran.txt";  // Nama file untuk menyimpan data
        $waktu = date("Y-m-d H:i:s"); // Waktu pengiriman
        $data = "[$waktu] - $kritikSaran\n"; 

        // Menyimpan ke file
        file_put_contents($file, $data, FILE_APPEND);

        echo "<script>alert('Kritik & Saran telah disimpan!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Kritik & Saran tidak boleh kosong!'); window.location.href='index.html';</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
