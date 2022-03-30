<?php

function getDateDifference ($start_date, $end_date) {
    $datediff = $end_date - $start_date;
    return $datediff;
}

$start_date = strtotime("27 Mar 2022");
$end_date = strtotime("2022-03-29");
$date_difference = getDateDifference($start_date, $end_date);

// format timestamp to day[s]
$days = (int)str_replace('-','',$date_difference  / (24 * 60 * 60)); //24 hours in a day and 60 min in an hour and 60 sec in a min

if ($days > 1 )
    print(" Date difference is : " . $days. " days");
else
    print(" Dates difference is : " . $days. " day");
?>