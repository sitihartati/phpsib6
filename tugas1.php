<?php
    $nama = "Siti Hartati";
    $jenis_kelamin = "Perempuan";
    $agama = "Islam";
    $alamat = "Jl. Rajawali Sakti";
    $tanggal_lahir = "26 Oktober 2002";
    $nomor_telepon = "081378726986";
    $email = "sityhartaty22@gmail.com";

    $pendidikan = array(
        "SDN I65 Pekanabru",
        "MTs Muhammadiyah 02 Pekanabru",
        "SMKS TELKOM Pekanbaru",
        "Universitas Muhammadiyah Riau"
    );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertama PHP</title>
</head>

<body>
    <h1 align="center">
        <marquee behavior="" direction="right" scrolldelay="100">
         
            BIODATA PRIBADI
        </marquee>
        <img src="https://media.licdn.com/dms/image/D4E03AQH5KvMhrLRKZw/profile-displayphoto-shrink_400_400/0/1708420765689?e=1714003200&v=beta&t=jpm_aEKRm6EAf7NumTZapiDb0kRyVhlkug7LgiZyrPM" alt="" width="10%" align="center" hspace="10">
    </h1>

    <p align="justify">
        Halo semuanya perkenalkan saya <?php echo $nama; ?> biasa dipanggil siti. Sekarang saya sedang menempuh pendidikan S1 Sistem Informasi di Universitas Muhammadiyah Riau semester 6. Saya lahir di Sumatera Selatan, <?php echo $tanggal_lahir; ?>. Saya tinggal di kota Pekanbaru
        tepatnya di <?php echo $alamat; ?>. Oh iya hampir lupa di semester sekarang saya sedang mengikuti program MSIB Batch 6 tepatnya Studi Independent Akademi Fullstack Web Developer di NF COMPUTER.
    </p>
    <p>

    </p>

    <fieldset>
        <legend>
            <font size="5" color="black" face="calibri">
                About Me
            </font>
        </legend>
        <ol>
            <h2>Data Pribadi</h2>
            <p>Nama Lengkap: <?php echo $nama; ?></p>
            <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
            <p>Agama: <?php echo $agama; ?></p>
            <p>Alamat: <?php echo $alamat; ?></p>
            <p>Tanggal Lahir: <?php echo $tanggal_lahir; ?></p>
            <p>Nomor Telepon: <?php echo $nomor_telepon; ?></p>
            <p>E-Mail: <?php echo $email; ?></p>

            <h2>Pendidikan</h2>
            <ul>
                <?php
                    foreach ($pendidikan as $pend) {
                        echo "<li>$pend</li>";
                    }
                ?>
            </ul>
        </ol>
    </fieldset>

</body>

</html>
