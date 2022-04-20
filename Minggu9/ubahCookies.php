<?php
    $name = "mahasiswa";
    $value = "Rahmat Ardianzah";
    setcookie($name, $value, time()+600);

    setcookie("kelas", "MI-1F", time()+3600);
?>
<html>
    <body>
        <?php
            echo "cookies telah diubah";
        ?>
    </body>
</html>