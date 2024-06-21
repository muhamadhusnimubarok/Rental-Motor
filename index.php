<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E7D4B5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #A0937D;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            margin-right: 10px;
            width: 150px;
            font-weight: bold;
        }

        input[type="number"],
        input[type='text'],
        select {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color:#F6E6CB;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #B6C7AA;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #729762;
        }

        .table-container {
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        td {
            text-align: right;
        }

        td:first-child {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="beda">
        <h1 class="text-center mb-4">Rental Motor</h1>

        <form action="" method="post">
            <div style="display: flex;"> 
                <label for="nama">Masukan Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div style="display: flex;"> 
                <label for="number">Masukan Hari:</label>
                <input type="number" name="waktu" id="number" required>
            </div>
            <div style="display: flex;">
                <label for="">Pilih Motor:</label>
                <select name="jenis" id="" required>
                    <option value="Scoopy">Scoopy</option>
                    <option value="Beat">Beat</option>
                    <option value="Vario">Vario</option>
                    <option value="Aerox">Aerox</option>
                </select>
            </div>
            <button type="submit" name="SEWA">Beli</button>
        </form>
        <?php
        // Panggil file eksekusi
        require "execute.php";
        ?>
    </div>
</body>
</html>
