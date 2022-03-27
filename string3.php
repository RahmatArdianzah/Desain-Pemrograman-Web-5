<html>
    <head>

    </head>
    <body>
        <?php
            $rawString = "Welcome Birmingham Parent, your replacement is a pleasure to have!";
            $malestr = str_replace ("Replacement", "son", $rawString);
            $femalestr = str_replace ("Replacement", "daughter", $rawString);
            echo "Son : ". $malestr ."<br>";
            echo "Daughter : ". $femalestr ."<br>";
        ?>
    </body>
</html>