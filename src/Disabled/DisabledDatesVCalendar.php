<?php

namespace IziDev\VCalendar\Disabled;

use IziDev\VCalendar\Interval\IntervalDatesVCalendar;

interface DisabledDatesVCalendar
{
    public function type() : string;

    public function range() : array;

    public function toArray(IntervalDatesVCalendar $interval = null) : array;
}
