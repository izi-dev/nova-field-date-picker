<?php

namespace IziDev\VCalendar;

use Laravel\Nova\Fields\Date;
use IziDev\VCalendar\Attributes\AttributeVCalendar;
use IziDev\VCalendar\Interval\IntervalDatesVCalendar;
use IziDev\VCalendar\Disabled\DisabledDatesVCalendar;

class SuperDatePicker extends Date
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'v-calendar';

    protected $attributes = [];

    protected $disabledDates = [];

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->locale(\App::getLocale());

        $this->withMeta(['attributeCalendar' => []]);
        $this->withMeta(['minDate' => null]);
        $this->withMeta(['maxDate' => null]);
        $this->withMeta(["isRange" => false ]);
        $this->withMeta(["disabled" => [] ]);
        $this->withMeta(["color" => 'blue' ]);
    }

    public function isDark()
    {
        return $this->withMeta([__FUNCTION__ => true]);
    }

    public function locale(string $locale)
    {
        return $this->withMeta([__FUNCTION__ => $locale]);
    }

    public function attributeCalendar(AttributeVCalendar $attribute)
    {
        $this->attributes[] = $attribute;

        return $this->withMeta([__FUNCTION__ => $this->attributes]);
    }

    public function isInline()
    {
        return $this->withMeta([__FUNCTION__ => true ]);
    }

    public function minDate($date)
    {
        return $this->withMeta([__FUNCTION__ => new \DateTime($date) ]);
    }

    public function maxDate($date)
    {
        return $this->withMeta([__FUNCTION__ => new \DateTime($date) ]);
    }

    public function disabled(DisabledDatesVCalendar $disable, IntervalDatesVCalendar $interval = null)
    {
        $this->disabledDates[] = $disable->toArray($interval);

        return $this->withMeta([__FUNCTION__ => $this->disabledDates ]);
    }

    public function disabledDates(...$disabled)
    {
        foreach ($disabled as $date) {
            $this->disabledDates[] = new \DateTime($date);
        }

        return $this->withMeta(['disabled' => $this->disabledDates ]);
    }

    public function disabledDatesMany($disabled = [])
    {
        foreach ($disabled as $date) {
            $this->disabledDates[] = new \DateTime($date);
        }

        return $this->withMeta(['disabled' => $this->disabledDates ]);
    }

    public function selectAttribute(AttributeVCalendar $attributeVCalendar)
    {
        return $this->withMeta([__FUNCTION__ => $attributeVCalendar]);
    }

    public function color(string $color)
    {
        return $this->withMeta([__FUNCTION__ => $color]);
    }
}
