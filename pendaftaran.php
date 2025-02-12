
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: solid 1px black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {background-color: #f2f2f2;}
    </style>
    <!-- Original Code by Ade Ahmad K -->
    <!-- KuroFurtex 2025 -->
</head>
<body>
    <h1>Data Pendaftaran</h1>
    <?php

    include "connect.php";

    $req = $pdo->prepare(
        "SELECT * FROM pendaftaran"
    );
    $req->execute();
    $pendaftaran = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($pendaftaran) > 0) {
        ?>
        <table>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Paket Service</th>
                <th>Masalah</th>
            </tr>
            <?php
            foreach ($pendaftaran as $row) {
                echo "<tr>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['alamat']."</td>";
                echo "<td>".$row['paket_service']."</td>";
                echo "<td>".$row['masalah']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
    } else {
        echo "Tidak Ada data";
    }
    ?>
</body>
</html>