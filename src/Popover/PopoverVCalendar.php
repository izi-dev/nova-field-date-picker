<?php

namespace IziDev\VCalendar\Popover;

interface PopoverVCalendar
{
    public function label() : string;

    public function visibility() : string;

    public function hideIndicator() : bool;
}
