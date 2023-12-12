<?php

class date
{
    public function __construct($date1, $date2)
    {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        echo 'Difference: ' . $interval->format('%y years, %m months, %d days');
    }
}

$d = new date('2013-09-04', '1981-11-03');
