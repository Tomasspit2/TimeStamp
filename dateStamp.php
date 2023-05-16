<?php
// initializing dates
$presentTime = new DateTime();
$destinationTime = new DateTime('2023-12-31 11:59:00');

echo "Current Time: ".$presentTime->format('F d, Y, A, g:i')."\n";
echo "Destination Time: ".$destinationTime->format('F d, Y, A, g:i')."\n";

// INTERVAL
$interval = $presentTime->diff($destinationTime);

$years = $interval->y;
$months = $interval->m;
$days = $interval->d;
$hours = $interval->h;
$minutes = $interval->i;

echo "Duration: ";
if ($years > 0) {
    echo "$years years, ";
}
if ($months > 0) {
    echo "$months months, ";
}
if ($days > 0) {
    echo "$days days, ";
}
if ($hours > 0) {
    echo "$hours hours, ";
}
echo "$minutes minutes.\n";

// Liters of fuel calc


$intervalInMinutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
$numberOfLiters = floor($intervalInMinutes / 10000);

echo "Number of liters of fuel required: $numberOfLiters liters.\n";


