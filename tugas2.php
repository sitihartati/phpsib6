<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $produk = $_POST['produk'];
    $jumlah_beli = $_POST['jumlah_beli'];

    $harga_satuan = 0;
    switch ($produk) {
        case 'TV':
            $harga_satuan = 4000000;
            break;
        case 'Kulkas':
            $harga_satuan = 5000000;
            break;
        case 'AC':
            $harga_satuan = 3000000;
            break;
        default:
            $harga_satuan = 0;
            break;
    }

    $total_belanja = $jumlah_beli * $harga_satuan;
    $diskon = 0.2 * $total_belanja;
    $ppn = 0.1 * ($total_belanja - $diskon);
    $harga_bersih = $total_belanja - $diskon + $ppn;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja</title>
    <style>
        .container {
            width: 400px;
            margin: 0 auto;
            border: 1px solid black;
            padding: 20px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="center">Form Belanja</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nama Pelanggan: <input type="text" name="nama_pelanggan"><br><br>
            Produk: 
            <select name="produk">
                <option value="TV">TV</option>
                <option value="Kulkas">Kulkas</option>
                <option value="AC">AC</option>
            </select><br><br>
            Jumlah Beli: <input type="text" name="jumlah_beli"><br><br>
            <div class="center"><input type="submit" name="submit" value="Submit"></div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><b>Nama Pelanggan:</b> $nama_pelanggan</p>";
            echo "<p><b>Produk:</b> $produk</p>";
            echo "<p><b>Jumlah Beli:</b> $jumlah_beli</p>";
            echo "<p><b>Harga Satuan:</b> $harga_satuan</p>";
            echo "<p><b>Total Belanja:</b> $total_belanja</p>";
            echo "<p><b>Diskon 20%:</b> $diskon</p>";
            echo "<p><b>PPN 10%:</b> $ppn</p>";
            echo "<p><b>Harga Bersih:</b> $harga_bersih</p>";
        }
        ?>
    </div>
</body>
</html>
