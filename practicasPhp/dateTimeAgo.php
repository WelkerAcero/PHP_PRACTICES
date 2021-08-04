
<?php

/*A time difference function that outputs the time passed in facebook's style: 1 day ago, or 4 months ago.
I took andrew dot macrobert at gmail dot com function and tweaked it a bit. On a strict enviroment it 
was throwing errors, plus I needed it to calculate the difference in time between a past date and a future 
date.*/

function nicetime($date)
{
    if (empty($date)) {
        return "No date provided";
    }

    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");

    $now = time();
    $unix_date = strtotime($date);

    // check validity of date
    if (empty($unix_date)) {
        return "Bad date";
    }

    // is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "ago";

    } else {
        $difference = $unix_date - $now;
        $tense = "from now";
    }

    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if ($difference != 1) {
        $periods[$j] .= "s";
    }

    print "$difference $periods[$j] {$tense}";
}

$date = "2009-03-04 17:45";
$result = nicetime($date); // 2 days ago

?>