<!DOCTYPE html>
<html>
<head>
    <title>Laporan Hobi</title>
</head>
<body>
    <h1>Laporan Hobi</h1>
    
    <?php
    include 'koneksi.php';

    if (isset($_GET['search_hobby'])) {
        $search_hobby = mysqli_real_escape_string($conn, $_GET['search_hobby']);
        $sql = "SELECT h.hobi, COUNT(p.id) as jumlah_orang
                FROM hobi h
                LEFT JOIN person p ON h.person_id = p.id
                WHERE h.hobi LIKE '%$search_hobby%'
                GROUP BY h.hobi
                ORDER BY jumlah_orang DESC";
    } else {
        $sql = "SELECT h.hobi, COUNT(p.id) as jumlah_orang
                FROM hobi h
                LEFT JOIN person p ON h.person_id = p.id
                GROUP BY h.hobi
                ORDER BY jumlah_orang DESC";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
    <table border='1'>
        <tr>
            <th>Hobi</th>
            <th>Jumlah Person</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['hobi']; ?></td>
            <td><?php echo $row['jumlah_orang']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php
    } else {
        echo "Tidak ada data";
    }

    mysqli_close($conn);
    ?>
    
    <form method="GET">
        <label for="search_hobby">Cari Berdasarkan Hobi:</label>
        <input type="text" name="search_hobby" id="search_hobby">
        <input type="submit" value="Cari">
    </form>
</body>
</html>
