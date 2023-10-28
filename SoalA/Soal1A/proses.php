<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 400px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
        }

        .form-row label {
            font-weight: bold;
        }

        .form-row input {
            flex: 1;
            margin-right: 10px;
            width: 100%;
            padding: 10px;
        }
    </style>
    <title>Proses Input Baris dan Kolom</title>
</head>
<body>
    <h1>Proses Input Baris dan Kolom</h1>
    <div class="form-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlah_baris = $_POST["jumlah_baris"];
            $jumlah_kolom = $_POST["jumlah_kolom"];
            
            echo "<form method='post' action='hasil.php'>";
            for ($i = 1; $i <= $jumlah_baris; $i++) {
                echo "<div class='form-row'>";
                for ($j = 1; $j <= $jumlah_kolom; $j++) {
                    echo "<label>$i.$j:</label><input type='text' name='data[$i][$j]' required>";
                }
                echo "</div>";
            }
            echo "<input type='submit' value='Submit'></form>";
        }
        ?>
    </div>
</body>
</html>
