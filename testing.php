<?php
$time = strtotime('2016-05-26 11:28:32');

echo 'event happened '.humanTiming($time).' ago';

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment
    /*$time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'tahun',
        2592000 => 'bulan',
        604800 => 'minggu',
        86400 => 'hari',
        3600 => 'jam',
        60 => 'menit',
        1 => 'detik',
		0.5=>'baru saja'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }*/
	print $time;

}