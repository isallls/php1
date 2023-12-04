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
$data = querry('kode_barang');
// var_dump($data);
// var_dump(querry("kode_barang"));
// function add()
// {
//     return mysqli_query(
//         INSERT INTO `kode_barang` (`kodebarang`, `namabarang`, `hargabarang`, `tahunpembuatan`, `stok`) 
//             VALUES ('KB01', 'Clame Plates', 40000, '2012', 10),)
// }
$kodeBarang = mysqli_query($conn, $data);
$kodeBarang2 = mysqli_query($conn, $data);
$goods = [];
while ($m = mysqli_fetch_assoc($kodeBarang)) {
    $goods[] = $m;
}
$stuff = $goods;
echo "<br>";
// var_dump($stuff);
if (isset($_GET["buttonSubmit"])) {
    $kodeBarang = $_GET["kodeBarang"];
    $namaBarang = $_GET["namaBarang"];
    $hargaBarang = $_GET["hargaBarang"];
    $tahun = $_GET["tahun"];
    $jumlahBarang = $_GET["jumlahB"];
}
$kodebarang2 = mysqli_query($conn, querry("kode_barang"));
// var_dump(mysqli_fetch_assoc($kodebarang2));
// echo "hallo";
// echo "<br>";
// echo (count(mysqli_fetch_assoc($kodebarang2)));
// echo "<br>";
// var_dump(count(mysqli_fetch_assoc($kodebarang2)));
