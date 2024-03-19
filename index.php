<?php
require 'imt.php';

$imt = 0;
$weight = "";
$height = "";
$class = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $weight = $_POST['berat'];
    $height = $_POST['tinggi'];
    $imt = round(imt($weight, $height), 2) . " kg/m2";
    $class = imt_class($imt);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator IMT</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="app">
        <h1>Kalkulator IMT</h1>

        <div class="kalkulator">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="berat">Berat Badan:</label>
                        <input type="number" name="berat" id="berat" value="<?= $weight ?>">
                    </li>
                    <li>
                        <label for="tinggi">Tinggi Badan :</label>
                        <input type="text" name="tinggi" id="tinggi" value="<?= $height ?>">
                    </li>
                </ul>
                <button type="submit" name="hitung" id="submit">Hitung</button>
            </form>
        </div>
        <div class="hasil">
            <h3>IMT kamu adalah</h3>
            <div class="angka">
                <span><?= $imt ?></span><br>
                <span><?= $class ?></span>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; <?= date("Y") ?> Aziz Khasyi</p>
        </div>
    </footer>
</body>

</html>