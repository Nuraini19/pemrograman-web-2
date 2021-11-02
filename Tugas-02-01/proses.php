<?php
/**
 * Inisialisasi Variabel
 */
$nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$prodi = isset($_POST["select"]) ? $_POST["select"] : "";



    echo "Hai, perkenalkan nama saya : ".$nama." dengan NIM : ".$nim. ". Saya adalah seorang Mahasiswa dari program studi ".$prodi;

?>


