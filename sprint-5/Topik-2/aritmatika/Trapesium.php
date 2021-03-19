<?php 
class Trapesium
{
    public function __construct($alasA, $alasB, $tinggi)
    {
        $luas = (($alasA+$alasB)*$tinggi)/2;
        $sisi = sqrt((($alasB-$alasA)**2)+($tinggi**2));
        $keliling = (2*$sisi)+$alasA+$alasB;
        echo "<h4>Luas Trapesium (A = $alasA, B = $alasB, tinggi = $tinggi) = $luas </h4>";
        echo "<h4>Keliling Trapesium (A = $alasA, B = $alasB, tinggi = $tinggi) = $keliling </h4>";
    }
}

?>