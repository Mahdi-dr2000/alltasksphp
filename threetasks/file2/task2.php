<?php
function checkSeason($temperature)
{
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

$inputTemperature = 27;

echo checkSeason($inputTemperature);
