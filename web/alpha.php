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
            echo "<div id="$i" style="background-color:red">";
            echo "</div>";
            }
            else {
            echo "<div id="$i">";
            echo "</div>";
            }
        }
    ?>
    </body>
</html> 