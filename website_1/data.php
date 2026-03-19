<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Data</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div class="container">
        <h1>Data</h1>
        <p>Berikut adalah data yang tersimpan dalam database.</p>

        <TABLE BORDER="1">
            <TR>
                <TH>ID</TH>
                <TH>Nama</TH>
                <TH>Email</TH>
            </TR>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM data_user");
            
            while ($data = mysqli_fetch_array($query)) {
                echo "<TR>";
                echo "<TD>" . $data['id'] . "</TD>";
                echo "<TD>" . $data['nama'] . "</TD>";
                echo "<TD>" . $data['email'] . "</TD>";
                echo "</TR>";
            }
            ?>
        </TABLE>
        <br>
        <nav>
            <a href="index.php">Home</a>
            <a href="data.php" class="active">Data</a>
            <a href="bantuan.php">Bantuan</a>
        </nav>
        </div>
    </body>
</html>