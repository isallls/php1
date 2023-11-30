<?php
include "1db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>

<body>
    <div>
        <form action="">
            <label for="kodeBarang">Kode barang</label>
            <input type="text" name="kodeBarang" id="kodeBarang">
            <br>
            <label for="jumlahB">stock barang</label>
            <input type="number" name="jumlahB" id="jumlahB">
            <br>
            <label for="namaBarang">Nama Barang</label>
            <input type="text" name="namaBarang" id="namaBarang">
            <br>
            <label for="hargaBarang1">Harga Barang</label>
            <input type="number" name="hargaBarang" id="hargaBarang1">
            <br>
            <label for="tahun">Tahun Pembuatan</label>
            <select name="tahun" id="">
                <?php for ($i = 2000; $i <= date("Y
                "); $i++) {
                    echo "<option value='$i'>$i</option>";
                } ?>
            </select>
            <button type="submit" name="buttonSubmit">masukan data</button>
        </form>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>kode barang</th>
                <th>nama barang</th>
                <th>stok</th>
                <th>harga barang</th>
                <th>tahun pembuatan</th>
            </tr>
            <tr>
                <?php while ($row = mysqli_fetch_assoc($kodeBarang)) { ?>
                    <td>
                        <center><?= $row['kodebarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row['namabarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row['stok'] ?></center>
                    </td>
                    <td>
                        <center>Rp. <?= $row['hargabarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row['tahunpembuatan'] ?></center>
                    </td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</body>

</html>