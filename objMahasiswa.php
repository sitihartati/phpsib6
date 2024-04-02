<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);

    echo "<div style='text-align: center;'>
            <h2>Daftar Nilai Ujian Mahasiswa</h2>
            <table border='1' cellpadding='10' cellspacing='2' width='80%' style='margin: 0 auto;'>
                <tr style='background-color:khaki;'>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>{$mahasiswa->nim}</td>
                    <td>{$mahasiswa->nama}</td>
                    <td>{$mahasiswa->kuliah}</td>
                    <td>{$mahasiswa->mata_kuliah}</td>
                    <td>{$mahasiswa->nilai}</td>
                    <td>{$mahasiswa->grade}</td>
                    <td>{$mahasiswa->predikat}</td>
                    <td>{$mahasiswa->status}</td>
                </tr>
            </table>
        </div>";
}
?>
