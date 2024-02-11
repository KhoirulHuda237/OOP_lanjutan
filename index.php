<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Makanan</title>
</head>

<body>
    <?php
    // Include file yang berisi definisi kelas Makanan, MakananSate, MakananSoto, ContohOverloading
    include 'makanan.php';

    // Membuat objek makanan
    $makananSoto = new MakananSoto("Soto Ayam", 5000, 1);
    $makananSate = new MakananSate("Sate Kambing", 12000, 2);

    // Menampilkan data makanan dalam tabel
    echo "<h2>Contoh Makanan dengan Penerapan Inheritance dan Enkapsulasi</h2>";

    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Harga</th><th>Jumlah Beli</th></tr>";

    echo "<tr>";
    echo "<td>" . $makananSoto->getNama() . "</td>";
    echo "<td>" . $makananSoto->getHarga() . "</td>";
    echo "<td>" . $makananSoto->getJumlahBeli() . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . $makananSate->getNama() . "</td>";
    echo "<td>" . $makananSate->getHarga() . "</td>";
    echo "<td>" . $makananSate->getJumlahBeli() . "</td>";
    echo "</tr>";

    echo "</table>";

    // Menampilkan data khusus untuk objek MakananSate
    if ($makananSate instanceof Makanan) {
        echo "<h2>Contoh MakananSate dengan Penerapan Abstraksi dan Polymorphism</h2>";

        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Harga</th><th>Jumlah Beli</th></tr>";

        echo "<tr>";
        echo "<td>" . $makananSate->getNama() . "</td>";
        echo "<td>" . $makananSate->getHarga() . "</td>";
        echo "<td>" . $makananSate->getJumlahBeli() . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>

</html>
