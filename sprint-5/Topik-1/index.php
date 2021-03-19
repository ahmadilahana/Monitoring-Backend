<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menghitung</title>
</head>

<body>
    <div class="main-menu" id="accordionGroup">
        <div class="menu">
            <label for="">
                <input type="radio" name="bangun" value="persegi" onchange="change(this.value)">Persegi Panjang
            </label>
            <label for="">
                <input type="radio" name="bangun" value="lingkaran" onchange="change(this.value)">Lingkaran
            </label>
            <label for="">
                <input type="radio" name="bangun" value="trapesium" onchange="change(this.value)">Trapesium
            </label>
            <label for="">
                <input type="radio" name="bangun" value="segitiga" onchange="change(this.value)">Segitiga
            </label>
        </div>
        <div class="content">
            <div class="item <?= ($_POST["hitung"]=="persegi") ? 'active' : ' ' ;?>" id="persegi">
                <h1>Menghitung Persegi</h1>
                <form action="" method="post">
                    <label for="">Panjang</label>
                    <input type="text" name="panjang" id="">
                    <label for="">Lebar</label>
                    <input type="text" name="lebar" id="">
                    <button type="submit" name="hitung" value="persegi">Hitung</button>
                    <?php
                    include("aritmatika/persegi.php");
                    use aritmatika\Persegi;
                    if (isset($_POST['hitung']) && $_POST['hitung']=="persegi") {
                        new Persegi($_POST['panjang'], $_POST['lebar']);
                    }
                    ?>
                </form>
            </div>
            <div class="item <?= ($_POST["hitung"]=="lingkaran") ? 'active' : ' ' ;?>" id="lingkaran">
                <h1>Menghitung Lingkaran</h1>
                <form action="" method="post">
                    <label for="">Jari-jari</label>
                    <input type="text" name="jari" id="">
                    <button type="submit" name="hitung" value="lingkaran">Hitung</button>
                    <?php
                    include('aritmatika/lingkaran.php');
                    use aritmatika\Lingkaran;
                    if (isset($_POST['hitung']) && $_POST['hitung']=="lingkaran") {
                        new Lingkaran($_POST['jari']);
                    }
                    ?>
                </form>
            </div>
            <div class="item <?= ($_POST["hitung"]=="trapesium") ? 'active' : ' ' ;?>" id="trapesium">
                <h1>Menghitung Trapesium</h1>
                <form action="" method="post">
                    <label for="">Alas atas</label>
                    <input type="text" name="alasA" id="">
                    <label for="">Alas Bawah</label>
                    <input type="text" name="alasB" id="">
                    <label for="">Tinggi</label>
                    <input type="text" name="tinggi" id="">
                    <button type="submit" name="hitung" value="trapesium">Hitung</button>
                </form>
                <?php
                    include('aritmatika/trapesium.php');
                    use aritmatika\Trapesium;
                    if (isset($_POST['hitung']) && $_POST['hitung']=="trapesium") {
                        new Trapesium($_POST['alasA'],$_POST['alasB'], $_POST['tinggi']);
                    }
                    ?>
            </div>
            <div class="item <?= ($_POST["hitung"]=="segitiga") ? 'active' : ' ' ;?>" id="segitiga">
                <h1>Menghitung Segitiga</h1>
                <form action="" method="post">
                    <label for="">Tinggi</label>
                    <input type="text" name="tinggi" id="">
                    <label for="">Panjang Alas</label>
                    <input type="text" name="alas" id="">
                    <button type="submit" name="hitung" value="segitiga">Hitung</button>
                </form>
                <?php
                include('aritmatika/segitiga.php');
                use aritmatika\Segitiga;
                if (isset($_POST['hitung']) && $_POST['hitung']=="segitiga") {
                    new Segitiga($_POST['alas'], $_POST['tinggi']);
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        function change(val) {
            item = document.getElementsByClassName("item");
            n = document.getElementsByClassName("item").length;
            for (let i = 0; i < n; i++) {
                h = item[i].className = "item";
            // console.log(h);
                
            }
            x = document.getElementById(val);
            x.className = "item active";
        }
    </script>
</body>

</html>