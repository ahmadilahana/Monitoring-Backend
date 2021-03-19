<?php 
namespace aritmatika;
class Lingkaran
{
    public function __construct($jari)
    {
        $luas = 3.14*$jari**2;
        $keliling = 2*3.14*$jari;
        echo "<h4>Luas Lingkaran (r = $jari) = $luas </h4>";
        echo "<h4>Keliling Lingkaran (r = $jari) = $keliling </h4>";
    }
}

?>