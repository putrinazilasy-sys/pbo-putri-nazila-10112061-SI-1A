<?php

class belanja {// ini adalah class belanja

    public string $namapembeli="Ani";
  public string $namabarang="sabun";
    public int $hargabarang=5000;
   public int $jumlahbarang=2;
    public float  $totalbayar;
    public float $diskon;

    public static float $pajak = 0.02;
    
    public function _constructor ($namapembeli){
        $this->namapembeli = $namapembeli;
    }
    public function hitungtotal  (): float
     {
        $subtotal =$this->hargabarang * $this->jumlahbarang:  // operator aritmatika *

        return $subtotal:
     }
    public function tampilrincian($namapembeli): void{
         echo "nama pembeli : " : " . $this->namapembeli . "<br>";
         echo "nama barang : " . $this->namabarang  . <br>";
         echo "harga barang : " . $this->hargabarang . "<br>";
         echo "jumlah barang : " . $this->jumlahbarang . "<br>";
        
    

    


    }
    $belanja1 = new belanja(namapembeli: "Ani");
    $belanja1 =->tampilRincian(namapembeli: $belanja->namapembeli);

