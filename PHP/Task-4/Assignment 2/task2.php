<?php
    $date = "2005-10-02";
    date_default_timezone_set("Africa/Cairo");
    echo date_default_timezone_get() . "<br>";
    $datetime = new DateTime($date);
    $datetime->modify("+15 hours +15 minutes +15 seconds");
    echo $datetime->format("Y, F, l 'dS' H:i:s") . "<br>";