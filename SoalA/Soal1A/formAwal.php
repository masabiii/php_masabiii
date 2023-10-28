<!DOCTYPE html>
<html>
<head>
    <title>Form Input Baris dan Kolom</title>
</head>
<body>
    <h1>Form Awal Input Baris dan Kolom</h1>
    <form method="post" action="proses.php">
        <label for="jumlah_baris">Inputkan Jumlah Baris:</label>
        <input type="number" name="jumlah_baris" id="jumlah_baris" required><br> 

        <label for="jumlah_kolom">Inputkan Jumlah Kolom:</label>
        <input type="number" name="jumlah_kolom" id="jumlah_kolom" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
