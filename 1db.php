<?php
$servername = "localhost";
$userName = "root";
$password = "";
$dbname = "isall";

// create connection

$conn = mysqli_connect($servername, $userName, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect";
    exit();
}
echo "connection success";
function querry($a)
{
    return "SELECT * FROM $a";
}
$kodeBarang = mysqli_query($conn, querry("kode_barang"));
$kodebarang2 = mysqli_query($conn, querry("kode_barang"));
// var_dump(mysqli_fetch_assoc($kodebarang2));

if (isset($_GET["buttonSubmit"])) {
    $kodeBarang = $_GET["kodeBarang"];
    $namaBarang = $_GET["namaBarang"];
    $hargaBarang = $_GET["hargaBarang"];
    $tahun = $_GET["tahun"];
    $jumlahBarang = $_GET["jumlahB"];
}
echo "hallo owrld";
echo "hallo owrld2";
echo "hallo owrld3";
