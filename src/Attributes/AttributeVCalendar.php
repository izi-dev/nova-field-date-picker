<?php

namespace IziDev\VCalendar\Attributes;

use IziDev\VCalendar\Popover\PopoverVCalendar;

interface AttributeVCalendar
{
    public function key(string $key) : AttributeVCalendar;

    public function dates(string $dates) : AttributeVCalendar;

    public function type($type) : AttributeVCalendar;

    public function popover(PopoverVCalendar $popover) : AttributeVCalendar;

    public function excludeDates(string $excludeDates) : AttributeVCalendar;

    public function order(int $order) : AttributeVCalendar;

    public function content(int $content) : AttributeVCalendar;
}
