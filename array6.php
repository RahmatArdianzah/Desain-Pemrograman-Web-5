<html>
    <head>

    </head>
    <body>
    <h2>Fungsi Count()</h2>
        <?php
            $menu = array ("Rawon","Sate","Nasi Goreng");
            $arrLength = count($menu);

            echo "Menu Hari ini adalah : <br>";
            for($x =0; $x < $arrLength; $x++){
                echo $menu[$x] . "<br>";
            }
            echo "<br> Saya lapar, saya ingin makan " . "<br>$menu[2]</br>"
        ?>
    </body>
</html>