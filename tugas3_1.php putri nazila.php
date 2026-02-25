<?php

class PegadaianSyariah {

    // Properti / Atribut
    public $pinjaman;
    public $bunga;
    public $lama;
    public $terlambat;

    // Constructor
    public function __construct($pinjaman, $bunga, $lama, $terlambat) {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama = $lama;
        $this->terlambat = $terlambat;
    }

    // Method hitung total pinjaman + bunga
    public function hitungTotalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // Method hitung angsuran
    public function hitungAngsuran() {
        return $this->hitungTotalPinjaman() / $this->lama;
    }

    // Method hitung denda
    public function hitungDenda() {
        return $this->terlambat * 0.0015 * $this->hitungAngsuran();
    }

    // Method hitung total pembayaran
    public function hitungPembayaran() {
        return $this->hitungAngsuran() + $this->hitungDenda();
    }

    // Method tampilkan hasil
    public function tampilkanHasil() {
        echo "TOKO PEGADAIAN SYARIAH <br>";
        echo "Jl Keadilan No 16 <br>";
        echo "Telp. 72353459 <br>";
        echo "--------------------------- <br>";

        echo "Total Pinjaman : Rp. " . number_format($this->hitungTotalPinjaman(), 0, ',', '.') . "<br>";
        echo "Besaran Angsuran : Rp. " . number_format($this->hitungAngsuran(), 0, ',', '.') . "<br>";
        echo "Denda Keterlambatan : Rp. " . number_format($this->hitungDenda(), 0, ',', '.') . "<br>";
        echo "Total Pembayaran : Rp. " . number_format($this->hitungPembayaran(), 0, ',', '.') . "<br>";
    }
}

// ==========================
// INPUT DATA (contoh)
// ==========================

$pinjaman = 1000000;
$bunga = 10;
$lama = 12;
$terlambat = 5;

// Membuat objek
$data = new PegadaianSyariah($pinjaman, $bunga, $lama, $terlambat);

// Menampilkan hasil
$data->tampilkanHasil();

?>