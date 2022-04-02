<?php

function getDateDifference ($start_date, $end_date) {
    $start_date = strtotime($start_date);
    $end_date = strtotime($end_date);
    $datediff = $end_date - $start_date;

    // format timestamp to day[s]
    $days = (int)str_replace('-','',$datediff  / (24 * 60 * 60)); //24 hours in a day and 60 min in an hour and 60 sec in a min


    return $days;
}

$start_date = "26 Mar 2022";
$end_date = "2022-03-29";

$days = getDateDifference($start_date, $end_date);
if ($days > 1 )
    print(" Date difference is : " . $days. " days");
else
    print(" Dates difference is : " . $days. " day");
?>