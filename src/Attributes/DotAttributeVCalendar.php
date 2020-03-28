<?php

namespace IziDev\VCalendar\Attributes;

use IziDev\VCalendar\Popover\PopoverVCalendar;

class DotAttributeVCalendar extends TypeAttributeVCalendar
{
    public $typeName = "dot";

    public $color;

    public $class;

    public function __construct($dot = null)
    {
        if($dot == null) {
            $dot = true;
        }

        $this->type($dot);
    }

    public function color($color)
    {
        $this->color = $color;

        $this->type($this);

        return $this;
    }

    public function class($class)
    {
        $this->class = $class;

        $this->type($this);

        return $this;
    }
}
