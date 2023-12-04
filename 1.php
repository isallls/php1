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
    <h1>echo php</h1>
    <a href="home.php">echo php</a>
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
        <form action="">
            <button type="submit" name="table">
                table
            </button>
        </form>
    </div>
    <?php
    if (isset($_GET["table"])) { ?>
        <table border="1">
            <tr>
                <th>kode barang</th>
                <th>stok</th>
                <th>nama barang</th>
            </tr>
            <?php foreach ($goods as $h) { ?>
                <tr>
                    <td><?= $h["kodebarang"] ?></td>
                    <td><?= $h["stok"] ?></td>
                    <td><?= $h["namabarang"] ?></td>
                </tr>
            <?php } ?>

            <tr>
                <td colspan="3">
                    <center>update stok setiap hari</center>
                </td>
            </tr>
        </table>
    <?php
    } else {
    }
    ?>
    <div>
        <table border="1">
            <tr>
                <th>kode barang</th>
                <th>nama barang</th>
                <th>stok</th>
                <th>harga barang</th>
                <th>tahun pembuatan</th>
                <th>detail barang</th>
            </tr>
            <tr>
                <?php while ($row1 = mysqli_fetch_assoc($kodeBarang2)) { ?>
                    <td>
                        <center><?= $row1['kodebarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row1['namabarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row1['stok'] ?></center>
                    </td>
                    <td>
                        <center>Rp. <?= $row1['hargabarang'] ?></center>
                    </td>
                    <td>
                        <center><?= $row1['tahunpembuatan'] ?></center>
                    </td>
                    <td>
                        <a href="modify.php?kodebarang=<?= $row1['kodebarang'] ?>">modify</a>
                    </td>
            </tr>
        <?php
                }
        ?>
        <tr>
            <td colspan="6">
                <center>update stok harian setiap hari</center>
            </td>
        </tr>
        </table>
    </div>
    <h1>ini footer</h1>
    <h1>ini footer ke 2</h1>
</body>

</html>