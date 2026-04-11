<?php
class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        return "Produk: $this->nama - Rp" . number_format($this->harga, 0, ',', '.');
    }
}

class ProdukDigital extends Produk {
    public $ukuranfile;

    public function __construct($nama, $harga, $ukuranfile){
        parent::__construct($nama, $harga);
        $this->ukuranfile = $ukuranfile;
    }

    public function getInfo(){
        return "Produk Digital: $this->nama - Rp" . number_format($this->harga, 0, ',', '.') . " Size: $this->ukuranfile MB";
    }
}

$p1 = new Produk("Buku", 5000);
$p2 = new ProdukDigital("Ebook PHP", 200000, 100);

echo $p1->getInfo();
echo "<br>";
echo $p2->getInfo();


// 🔹 Data array + looping
$data = [
    ["tipe"=>"produk","nama"=>"Buku","harga"=>5000],
    ["tipe"=>"digital","nama"=>"Ebook","harga"=>100000,"size"=>25]
];

foreach($data as $d){

    if($d["tipe"] == "produk"){
        $obj = new Produk($d["nama"], $d["harga"]);
    } else {
        $obj = new ProdukDigital($d["nama"], $d["harga"], $d["size"]);
    }

    echo "<br>";
    echo $obj->getInfo();
}

?>