<?php

// Class dasar
class Makanan
{
    protected $nama;
    protected $harga;
    protected $jumlahBeli;

    // Constructor
    public function __construct($nama, $harga, $jumlahBeli)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlahBeli = $jumlahBeli;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getJumlahBeli()
    {
        return $this->jumlahBeli;
    }

    // Metode virtual untuk polimorfisme
    public function cekTotal()
    {
        return $this->harga * $this->jumlahBeli;
    }

    // Metode untuk mengambil total
    public function getTotal()
    {
        return $this->cekTotal();
    }

    // Destructor
    public function __destruct()
    {
        echo "Tampilkan objek Makanan\n";
    }
}

// Kelas turunan
class MakananSate extends Makanan
{
    // Constructor
    public function __construct($nama, $harga, $jumlahBeli)
    {
        parent::__construct($nama, $harga, $jumlahBeli);
    }

    // Destructor
    public function __destruct()
    {
        echo "Tampilkan objek MakananSate\n";
    }
}

// Kelas turunan lainnya
class MakananSoto extends Makanan
{
    // Constructor
    public function __construct($nama, $harga, $jumlahBeli)
    {
        parent::__construct($nama, $harga, $jumlahBeli);
    }

    // Destructor
    public function __destruct()
    {
        echo "Tampilkan objek MakananSoto\n";
    }
}

// Contoh overloading
class ContohOverloading
{
    public function cetak($num)
    {
        echo "total: " . $num . "\n";
    }
}

// Contoh polimorfisme
function cetakTotal(Makanan $makanan)
{
    echo "Makanan: " . $makanan->cekTotal() . "\n";
}

// Penggunaan kelas dan fungsi
$makananSate = new MakananSate("Sate Kambing", 12000, 2);
echo "Nama: " . $makananSate->getNama() . "\n";
echo "Harga: " . $makananSate->getHarga() . "\n";
echo "Jumlah Beli: " . $makananSate->getJumlahBeli() . "\n";
cetakTotal($makananSate);

$makananSoto = new MakananSoto("Soto Ayam", 5000, 1);
echo "Nama: " . $makananSoto->getNama() . "\n";
echo "Harga: " . $makananSoto->getHarga() . "\n";
echo "Jumlah Beli: " . $makananSoto->getJumlahBeli() . "\n";
cetakTotal($makananSoto);

$contoh = new ContohOverloading();
$contoh->cetak(1);
$contoh->cetak(2);
echo "total: 1\n";

// Output:
// Nama: Sate Kambing
// Harga: 12000
// Jumlah Beli: 2
// Makanan: 24000
// Nama: Soto Ayam
// Harga: 5000
// Jumlah Beli: 1
// Makanan: 5000
// total: 1
// total: 2
// Tampilkan objek MakananSate
// Tampilkan objek MakananSoto
// Tampilkan objek Makanan
?>