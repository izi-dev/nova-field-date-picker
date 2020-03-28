<?php

namespace IziDev\VCalendar\Interval;

abstract class TypeIntervalDatesVCalendar implements IntervalDatesVCalendar
{
    public $type;

    public $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function value() : int
    {
        return $this->value;
    }
}
