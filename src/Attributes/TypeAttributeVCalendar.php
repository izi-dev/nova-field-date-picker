<?php

namespace IziDev\VCalendar\Attributes;

use DateTime;
use IziDev\VCalendar\Popover\PopoverVCalendar;

class TypeAttributeVCalendar implements AttributeVCalendar
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var array
     */
    public $dates;

    /**
     * @var PopoverVCalendar
     */
    public $popover;

    /**
     * @var array
     */
    public $excludeDates;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var object
     */
    public $typeValue;

    /**
     * @var string
     */
    public $content;

    public function key(string $key) : AttributeVCalendar
    {
        $this->key = $key;

        return $this;
    }

    public function dates(string $dates) : AttributeVCalendar
    {
        $this->dates[] = new \DateTime($dates);

        return $this;
    }

    public function type($value) : AttributeVCalendar
    {
        $this->typeValue = $value;

        return $this;
    }

    public function popover(PopoverVCalendar $popover) : AttributeVCalendar
    {
        $this->popover = $popover;

        return $this;
    }

    public function excludeDates(string $excludeDates) : AttributeVCalendar
    {
        $this->excludeDates[] = new \DateTime($excludeDates);

        return $this;
    }

    public function order(int $order) : AttributeVCalendar
    {
        $this->order = $order;

        return $this;
    }

    public function content($content) : AttributeVCalendar
    {
        $this->content = $content;

        return $this;
    }
}
