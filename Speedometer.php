<?php

class Speedometer
{
    const CONVERT = [
        'mile' => 0.621,
        'km' => 1.609
    ];

    public static function convertKmToMiles($distance): float
    {
        return $distance * self::CONVERT['mile'];
    }

    public static function convertMilesToKm($distance): float
    {
        return $distance * self::CONVERT['km'];
    }
}
