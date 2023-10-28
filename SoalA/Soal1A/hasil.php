<!DOCTYPE html>
<html>
<head>
    <style>
        .row {
            font-weight: bold;
        }
    </style>
    <title>Hasil Input</title>
</head>
<body>
    <h1>Hasil Input</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST['data'];
            foreach ($data as $baris => $kolom) {
                echo "<div class='row'>";
                foreach ($kolom as $kolom => $nilai) {
                    echo "$baris.$kolom: $nilai<br>";
                }
                echo "</div>";
            }
        }
        ?>
</body>
</html>
