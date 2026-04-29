<?php
class Karyawan {
    public $nama, $golongan, $jamLembur;

    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    public function getTotalGaji() {
        $gajiPokok = 0;
        if ($this->golongan == "IIb") $gajiPokok = 2500000;
        else if ($this->golongan == "IIIc") $gajiPokok = 3000000;
        else $gajiPokok = 2000000;
        return $gajiPokok + ($this->jamLembur * 15000);
    }
}

// Array ini harus di LUAR while supaya datanya awet selama program jalan
$dataKaryawan = [];

while (true) {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n2. Tambah Data\n3. Keluar\n";
    echo "Pilih menu: ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == "1") {
        echo "\n===== DATA GAJI KARYAWAN =====\n";
        echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";
        if (empty($dataKaryawan)) {
            echo "--- Data Kosong ---\n";
        } else {
            foreach ($dataKaryawan as $i => $k) {
                echo ($i + 1) . " | " . $k->nama . " | " . $k->golongan . " | " . $k->jamLembur . " | Rp" . number_format($k->getTotalGaji()) . "\n";
            }
        }
    } elseif ($pilih == "2") {
        echo "\nNama: "; $nama = trim(fgets(STDIN));
        echo "Golongan: "; $gol = trim(fgets(STDIN));
        echo "Jam Lembur: "; $jam = trim(fgets(STDIN));
        
        // Simpan ke array
        $dataKaryawan[] = new Karyawan($nama, $gol, $jam);
        echo "Data berhasil ditambah!\n";
    } elseif ($pilih == "3") {
        break;
    }
}