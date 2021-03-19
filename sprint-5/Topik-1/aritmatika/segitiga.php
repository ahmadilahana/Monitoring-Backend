<?php 
namespace aritmatika;

class Segitiga
{
    public function __construct($alas, $tinggi)
    {
        $luas = ($alas*$tinggi)/2;
        $sisi = sqrt((($alas)**2)+($tinggi**2));
        $keliling = $sisi+$alas+$tinggi;
        echo "<h4>Luas Segititga (A = $alas, tinggi = $tinggi) = $luas </h4>";
        echo "<h4>Keliling Segitiga (A = $alas, tinggi = $tinggi) = $keliling </h4>";
    }

}
?>