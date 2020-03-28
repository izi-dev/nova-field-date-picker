<?php

namespace IziDev\VCalendar\Attributes;

use IziDev\VCalendar\Popover\PopoverVCalendar;

class BarAttributeVCalendar extends TypeAttributeVCalendar
{
    public $typeName = "bar";

    protected $color;

    protected $class;

    public function __construct($bar = null)
    {
        if($bar == null) {
            $bar = true;
        }

        $this->type($bar);
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
