<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cube Timer</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="./img/logo_reflet_2.jpg" type="image/x-icon" />
    <style></style>
    <script src="chronometre.js"></script>
</head>

<body>
    <img id="logo" src="./img/logo_reflet.jpg" alt="">
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <span value="start!" onClick="chronoStart()" id="chronotime">0:00:00:00</span>
    <form name="chronoForm">
        <input type="button" name="startstop" />
        <input type="button" name="reset" value="reset!" onClick="chronoReset()" />
    </form>
</body>

</html>



<?php
$SCRAMBLE = array("U2", "U", "U'", "B", "B2", "B'", "L", "L2", "L'", "R2", "R", "R'", "D2", "D", "D'", "F2", "F", "F'");
$SCRAMBLE_random = array_rand($SCRAMBLE, 17);
echo $SCRAMBLE[$SCRAMBLE_random[0]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[1]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[2]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[3]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[4]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[5]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[6]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[7]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[8]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[9]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[10]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[11]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[12]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[13]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[14]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[15]] . " ";
echo $SCRAMBLE[$SCRAMBLE_random[16]];

function scramble()
{
}
























// $SCRAMBLE = array("U2", "U", "U'", "B", "B2", "B'", "L", "L2", "L'", "R2", "R", "R'", "D2", "D", "D'", "F2", "F", "F'");
// $SCRAMBLE_random = array_rand($SCRAMBLE, 17);
// echo $SCRAMBLE[$SCRAMBLE_random[0]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[1]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[2]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[3]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[4]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[5]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[6]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[7]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[8]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[9]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[10]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[11]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[12]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[13]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[14]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[15]] . " ";
// echo $SCRAMBLE[$SCRAMBLE_random[16]];

// function scramble()
// {
// }

echo "<img src='/img/logo_reflet.jpg/>";
?>