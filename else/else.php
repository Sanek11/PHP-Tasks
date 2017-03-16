<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>else</title>
        <body>
            <?php
            
                $scoops = 1;

            if ($scoops >= 5) {
                echo("Eat faster, the ice cream is going to melt!");
            }
            else if ($scoops == 3) {
                echo("Ice cream is running low!");
            }
            else if ($scoops == 2) {
                echo("Going once!");
            }
            else if ($scoops == 1) {
                echo("Going twice!");
            }
            else if ($scoops == 0) {
                echo("Gone!");
            }
            else {
                echo("Still lots of ice cream left, come and get it.");
            }
            
        </body>
    </head>
</html>