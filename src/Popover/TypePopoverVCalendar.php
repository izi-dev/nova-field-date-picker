<?php

namespace IziDev\VCalendar\Popover;

abstract class TypePopoverVCalendar implements PopoverVCalendar
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $visibility = '';

    /**
     * @var bool
     */
    public $hideIndicator;

    public function __construct($label, $hideIndicator = false)
    {
        $this->hideIndicator = $hideIndicator;

        $this->label = $label;
    }

    public function label() : string
    {
        return $this->label;
    }

    public function visibility() : string
    {
        return $this->visibility;
    }

    public function hideIndicator() : bool
    {
        return $this->hideIndicator;
    }
}
