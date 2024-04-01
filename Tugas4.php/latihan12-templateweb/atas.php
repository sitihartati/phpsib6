<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=W">
    <title>WEB SITI</title>
</head>
<body>
    <h1 align="center">WEB SITI</h1>

    <div style="text-align: center; background-color:khaki; color:blue">
    <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
    <!-- panggil dengan cara array -->
    <?php
    // looping foreeach dari webmenu.php
    foreach($menu_atas as $key => $value){
        // echo "$key $value <br>";
        echo "<a href= 'index.php?hal=$key'>$value</a> | ";
    }
 ?>
    </div>