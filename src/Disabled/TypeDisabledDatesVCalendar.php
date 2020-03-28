<?php

namespace IziDev\VCalendar\Disabled;

use IziDev\VCalendar\Interval\IntervalDatesVCalendar;

abstract class TypeDisabledDatesVCalendar implements DisabledDatesVCalendar
{
    protected $type = "";

    protected $range = [

    ];

    public function __construct(...$range)
    {
        $this->range = $range;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function range() : array
    {
        return $this->range;
    }

    public function toArray(IntervalDatesVCalendar $interval = null) : array
    {
        if($interval == null) return [ $this->type() => $this->range() ];

        return [ $this->type() => $this->range(), $interval->type() => $interval->value() ];
    }
}
