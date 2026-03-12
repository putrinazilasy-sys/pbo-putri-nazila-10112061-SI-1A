<?php

class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    // constructor
    function __construct($jenis,$sisi,$jari,$tinggi){
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    // method hitung volume
    function hitungVolume(){

        switch($this->jenis){

            case "Bola":
                return (4/3) * pi() * pow($this->jari,3);
                break;

            case "Kerucut":
                return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
                break;

            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi,2) * $this->tinggi;
                break;

            case "Kubus":
                return pow($this->sisi,3);
                break;

            case "Tabung":
                return pi() * pow($this->jari,2) * $this->tinggi;
                break;

            default:
                return 0;
        }

    }
}

// array data bangun ruang
$data = [
    new BangunRuang("Bola",0,7,0),
    new BangunRuang("Kerucut",0,14,10),
    new BangunRuang("Limas Segi Empat",8,0,24),
    new BangunRuang("Kubus",30,0,0),
    new BangunRuang("Tabung",0,7,10)
];

?>

<!DOCTYPE html>
<html>
<head>
<title>Volume Bangun Ruang</title>
<style>

table{
border-collapse:collapse;
width:600px;
}

th{
background:blue;
color:white;
padding:8px;
}

td{
border:1px solid black;
padding:8px;
text-align:center;
}

</style>
</head>

<body>

<h3>Tabel Volume Bangun Ruang</h3>

<table>

<tr>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>

<?php

// perulangan
foreach($data as $d){

echo "<tr>";
echo "<td>".$d->jenis."</td>";
echo "<td>".$d->sisi."</td>";
echo "<td>".$d->jari."</td>";
echo "<td>".$d->tinggi."</td>";
echo "<td>".$d->hitungVolume()."</td>";
echo "</tr>";

}

?>

</table>

</body>
</html>