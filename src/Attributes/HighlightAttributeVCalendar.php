<?php

namespace IziDev\VCalendar\Attributes;

use IziDev\VCalendar\Popover\PopoverVCalendar;

class HighlightAttributeVCalendar extends TypeAttributeVCalendar
{
    public $typeName = "highlight";

    public function __construct($highlight = null)
    {
        if($highlight == null) {
            $highlight = true;
        }

        $this->type($highlight);
    }
}
