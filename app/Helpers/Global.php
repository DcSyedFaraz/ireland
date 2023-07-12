<?php

use Carbon\Carbon;
use Illuminate\Support\Str;


    function showDate($date)
    {
        return Carbon::parse($date)->format('j F Y');
    }

    function showAttendanceDate($date)
    {
        return Carbon::parse( $date )->format('D j F Y');
    }

    function showTime($date)
    {
        return Carbon::parse( $date )->format('H:i:s');
    }

    function jobDurationTime( $timeIn, $timeOut)
    {
        $startTime  = Carbon::parse( $timeIn );
        $finishTime = Carbon::parse( $timeOut );
        $totalDuration = $startTime->diffInSeconds($finishTime);
        return gmdate('H:i:s', $totalDuration);
    }

    function isLate($startTime , $timeIn, $lateMinutes )
    {
        $jobStartTime   = Carbon::parse( $startTime  );
        $timeIn         = Carbon::parse( $timeIn  );
        $totalDuration  = $timeIn->diffInMinutes($jobStartTime);
        if ( $totalDuration > $lateMinutes ) {
            return true;
            echo '<span class="badge badge-danger">Late</span>' ;
        }
        return false;
        echo '<span class="badge badge-info">Not Late</span>' ;
    }

    function addCurrency($value)
    {
        return number_format((float)$value, 2, '.', '')." €";
    }

    function showDateTime($date)
    {
        return Carbon::parse($date)->format('jS \of F Y \a\t h:i A');
    }

    function showDateTimeDay($date)
    {
        return Carbon::parse($date)->format('\(l\)  jS \of F Y \a\t h:i:s A');
    }
    function getEstimateReadingTime($body)
{
    Str::macro('readDuration', function(...$text) {
        $totalWords = str_word_count(implode(" ", $text));
        $minutesToRead = round($totalWords / 200);

        return (int)max(1, $minutesToRead);
    });

    return Str::readDuration($body). ' min to read';
}


