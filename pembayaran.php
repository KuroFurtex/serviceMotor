
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
</head>
<body>
    <h1>Data Pembayaran</h1>
    <?php

    include "connect.php";

    $req = $pdo->prepare(
        "SELECT * FROM pembayaran"
    );
    $req->execute();
    $pembayaran = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($pembayaran) > 0) {
        ?>
        <table>
            <tr>
                <th>Tambahan Part</th>
                <th>Total Biaya</th>
                <th>Metode Pembayaran</th>
            </tr>
            <?php
            foreach ($pembayaran as $row) {
                echo "<tr>";
                echo "<td>".$row['tambahan_part']."</td>";
                echo "<td>".$row['total_biaya']."</td>";
                echo "<td>".$row['metode_pembayaran']."</td>";
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