<?php 

namespace aritmatika;

class Persegi
{
    public function __construct($panjang, $lebar)
    {
        $luas = $panjang*$lebar;
        $keliling = 2*($panjang+$lebar);
        echo "<h4>Luas persegi panjang (p = $panjang, l = $lebar) = $luas </h4>";
        echo "<h4>Keliling persegi panjang (p = $panjang, l = $lebar) = $keliling </h4>";
    }
}

?>