<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Alpha Alpha
        </title>
    </head>
    <body>
        <h1>This is a PHP page</h1>
    <?php
        for ($i = 0; $i < 10; $i++)
        {
            if ($i % 2){
            echo "<div>";
            echo "no";
            echo "</div>";
            }
            else {
            echo "<div>";
            echo "hello";
            echo "</div>";
            }
        }
    ?>
    </body>
</html> 