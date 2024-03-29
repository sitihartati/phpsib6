<?php
$data_nilai = array(
    array("Kartika", "123456", 85),
    array("Amalia", "234567", 70),
    array("Hendra", "345678", 60),
    array("Anggraini", "456789", 55),
    array("Wulan", "567890", 45),
    array("Wulandari", "678901", 90),
    array("Kurniawan", "789012", 75),
    array("Aditya", "890123", 68),
    array("Utami", "901234", 52),
    array("Wahyuni", "012345", 55),
    array("Nugroho", "123456", 85),
    array("Lestari", "234567", 70),
    array("Rahmawati", "345678", 75),
    array("Setiawan", "456789", 83),
    array("Achmad", "567890", 50),
);


$total_nilai = 0;
foreach ($data_nilai as $nilai) {
    $total_nilai += $nilai[2];
}
$rata_rata = $total_nilai / count($data_nilai);

$nilai_tertinggi = max(array_column($data_nilai, 2));
$nilai_terendah = min(array_column($data_nilai, 2));

$jumlah_mahasiswa = count($data_nilai);

$jumlah_keseluruhan_nilai = array_sum(array_column($data_nilai, 2));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Nilai Mahasiswa</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    table {
        width: 80%;
        margin: auto;
        border:10px;
       
    }
    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color:grey;
        color: white;
    }
    tfoot {
        padding: 12px;
        background-color:gray;
        color: white;
    }
    h1 {
        text-align: center;
    }
   
</style>
</head>
<body>
    <h1> DAFTAR NILAI MAHASISWA</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_nilai as $data => $nilai) : ?>
            <tr>
                <td><?php echo $data + 1; ?></td>
                <td><?php echo $nilai[0]; ?></td>
                <td><?php echo $nilai[1]; ?></td>
                <td><?php echo $nilai[2]; ?></td>
                <td><?php echo ($nilai[2] >= 65) ? 'Lulus' : 'Tidak Lulus'; ?></td>
                <td>
                    <?php
                    switch (true) {
                        case $nilai[2] >= 85:
                            echo 'A';
                            break;
                        case $nilai[2] >= 75:
                            echo 'B';
                            break;
                        case $nilai[2] >= 65:
                            echo 'C';
                            break;
                        case $nilai[2] >= 50:
                            echo 'D';
                            break;
                        default:
                            echo 'E';
                            break;
                    }
                    ?>
                </td>
                <td>
                    <?php
                    switch (true) {
                        case $nilai[2] >= 85:
                            echo 'Memuaskan';
                            break;
                        case $nilai[2] >= 75:
                            echo 'Bagus';
                            break;
                        case $nilai[2] >= 65:
                            echo 'Cukup';
                            break;
                        case $nilai[2] >= 50:
                            echo 'Kurang';
                            break;
                        default:
                            echo 'Buruk';
                            break;
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6">Nilai Tertinggi</td>
            <td><?php echo $nilai_tertinggi; ?></td>
        </tr>
        <tr>
        <td colspan="6">Nilai Terendah</td>
            <td><?php echo $nilai_terendah; ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Rata-rata</td>
            <td><?php echo number_format($rata_rata, 2); ?></td>
        </tr>
        <tr>
        <td colspan="6">Jumlah Mahasiswa</td>
            <td><?php echo $jumlah_mahasiswa; ?></td>
        </tr>
        <tr>
            <td colspan="6">Jumlah Keseluruhan Nilai</td>
            <td><?php echo $jumlah_keseluruhan_nilai; ?></td>
        </tr>
    </tfoot>
</table>

</body>
</html>
