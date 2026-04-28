<?php

// =======================
// CLASS INDUK
// =======================
class Tabungan {
    protected $nama;
    private $saldo;

    // Constructor
    public function __construct($nama, $saldoAwal) {
        $this->nama = $nama;
        $this->saldo = $saldoAwal;
    }

    // Getter (encapsulation)
    public function getSaldo() {
        return $this->saldo;
    }

    public function getNama() {
        return $this->nama;
    }

    // Setor (tambah saldo)
    public function setor($jumlah) {
        $this->saldo += $jumlah;
        echo "Setor berhasil!\n";
    }

    // Tarik (kurang saldo)
    public function tarik($jumlah) {
        if ($jumlah > $this->saldo) {
            echo "Saldo tidak cukup!\n";
        } else {
            $this->saldo -= $jumlah;
            echo "Tarik berhasil!\n";
        }
    }
}

// =======================
// CLASS ANAK
// =======================
class Siswa extends Tabungan {
    // turunan dari Tabungan
}

// =======================
// ARRAY SISWA
// =======================
$siswa = [
    new Siswa("Siswa 1", 10000),
    new Siswa("Siswa 2", 15000),
    new Siswa("Siswa 3", 20000)
];

// =======================
// TAMPILKAN SALDO AWAL
// =======================
echo "=== SALDO AWAL ===\n";
foreach ($siswa as $s) {
    echo $s->getNama() . " : Rp " . $s->getSaldo() . "\n";
}

// =======================
// INPUT USER (fgets)
// =======================
echo "\nPilih siswa (1-3): ";
$pilih = trim(fgets(STDIN));

// VALIDASI
if ($pilih < 1 || $pilih > 3) {
    echo "Pilihan tidak valid!\n";
    exit;
}

$index = $pilih - 1;

// =======================
// MENU
// =======================
echo "\n1. Setor\n";
echo "2. Tarik\n";
echo "Pilih aksi: ";
$aksi = trim(fgets(STDIN));

echo "Masukkan jumlah: ";
$jumlah = trim(fgets(STDIN));

// =======================
// PROSES
// =======================
if ($aksi == 1) {
    $siswa[$index]->setor($jumlah);
} elseif ($aksi == 2) {
    $siswa[$index]->tarik($jumlah);
} else {
    echo "Aksi tidak valid!\n";
}

// =======================
// OUTPUT SALDO AKHIR
// =======================
echo "\n=== SALDO AKHIR ===\n";
foreach ($siswa as $s) {
    echo $s->getNama() . " : Rp " . $s->getSaldo() . "\n";
}

?>