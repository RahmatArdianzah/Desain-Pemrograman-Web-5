<html>
    <head>

    </head>
    <body>
        <h2>Fungsi Menghitung Luas Lingkaran</h2>
        <?php
            echo "Luas lingkaran dengan jari-jari 7cm = ". luas_lingkaran(7). " cm";

            function luas_lingkaran($jari2){
                return 3.14 * $jari2 * $jari2;
            }
        ?>
    </body>
</html>