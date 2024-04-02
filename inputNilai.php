<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div class="container">
        <form action="objMahasiswa.php" method="post" >
            <h2 style="text-align: center;">Form Nilai Ujian</h2>
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim"><br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama"><br>
            <label for="kuliah">Kuliah:</label>
            <input type="text" name="kuliah" id="kuliah"><br>
            <label for="mata_kuliah">Mata Kuliah:</label>
            <input type="text" name="mata_kuliah" id="mata_kuliah"><br>
            <label for="nilai">Nilai:</label>
            <input type="text" name="nilai" id="nilai"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
