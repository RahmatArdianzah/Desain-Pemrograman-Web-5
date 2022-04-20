<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "Cilok";

            echo "Session telah diset";
        ?>
    </body>
</html>