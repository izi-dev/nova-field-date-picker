<?php

namespace IziDev\VCalendar\Attributes;

use IziDev\VCalendar\Popover\PopoverVCalendar;

class CustomHighlightAttributeVCalendar
{
    public $color;

    public $fillMode;

    public $contentClass;

    public function __construct($color = null, $fillMode = null, $contentClass = null)
    {
        $this->color = $color;
        $this->fillMode = $fillMode;
        $this->contentClass = $contentClass;
    }

    public function color($color)
    {
        $this->color = $color;

        return $this;
    }

    public function fillMode($fillMode)
    {
        $this->fillMode = $fillMode;

        return $this;
    }

    public function contentClass($contentClass)
    {
        $this->contentClass = $contentClass;

        return $this;
    }
}
