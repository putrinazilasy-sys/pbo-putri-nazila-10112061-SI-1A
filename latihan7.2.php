<?php

// Parent Class
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji() {
        return $this->gaji;
    }
}

// ================= PROGRAMMER =================
class Programmer extends Employee {

    public function hitungGaji() {
        if ($this->lamaKerja < 1) {
            return $this->gaji;
        } elseif ($this->lamaKerja >= 1 && $this->lamaKerja <= 10) {
            return $this->gaji + (0.01 * $this->lamaKerja * $this->gaji);
        } else {
            return $this->gaji + (0.02 * $this->lamaKerja * $this->gaji);
        }
    }
}

// ================= DIREKTUR =================
class Direktur extends Employee {

    public function hitungGaji() {
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }
}

// ================= PEGAWAI MINGGUAN =================
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual) {
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->terjual = $terjual;
    }

    public function hitungGaji() {
        $persen = $this->terjual / $this->stok;

        if ($persen > 0.7) {
            return $this->gaji + (0.10 * $this->hargaBarang * $this->terjual);
        } else {
            return $this->gaji + (0.03 * $this->hargaBarang * $this->terjual);
        }
    }
}

// ================= ARRAY DATA =================
$pegawai = [
    new Programmer("Zila", 5000000, 5),
    new Direktur("Budi", 10000000, 12),
    new PegawaiMingguan("Siti", 3000000, 2, 50000, 100, 80)
];

// ================= OUTPUT =================
foreach ($pegawai as $p) {
    echo "Nama: " . $p->nama . "<br>";
    echo "Gaji Total: Rp " . number_format($p->hitungGaji(), 0, ',', '.') . "<br><br>";
}

?>