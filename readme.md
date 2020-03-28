# Laravel Nova Field Super DatePicker
[![GitHub license](https://img.shields.io/github/license/MohmmedAshraf/nova-fields-agent.svg)](https://github.com/MohmmedAshraf/nova-fields-agent/blob/master/LICENSE.md)


## Description
An elegant calendar and datepicker Field for laravel nova based on https://vcalendar.io/.

## Screenshots
![Screenshot1](1Datepicker.PNG "Preview")
![Screenshot2](2Datepicker.PNG "Preview")

## Installation
This package can be installed through Composer.
```bash
composer require izi-dev/nova-field-date-picker
```

## Example Usage
```php

use IziDev\VCalendar\SuperDatePicker;

SuperDatePicker::make(__("Birthdate"), 'birthdate')
    ->required(true)
    ->rules('required', 'date'),
```
![Screenshot3](/docs/img/3Datepicker.PNG "Preview")

## Dark Mode

```
->isDark()
```
![Screenshot4](/docs/img/4Datepicker.PNG "Preview")

## Color

```
->color("red") //gray, red, orange, yellow, green, teal, blue, indigo, purple, pink.
```

![Screenshot5](/docs/img/5Datepicker.PNG "Preview")

## Inline
```
->isInline() 
```

![Screenshot6](/docs/img/6Datepicker.PNG "Preview")

## Disabled Dates

```
->disabledDates("2020-03-23")
->disabledDates("2020-03-25","2020-03-24")
->disabledDates(["2020-03-25","2020-03-26"])
```

![Screenshot7](/docs/img/7Datepicker.PNG "Preview")

## Format

```
->format("YYYY/MM/DD")
```

![Screenshot8](/docs/img/8Datepicker.PNG "Preview")

## Locale

```
->locale("en")
```

![Screenshot9](/docs/img/9Datepicker.PNG "Preview")

## Min && Max Date

```
->minDate("2020-03-01")
->maxDate("2020-03-31")
```
![Screenshot10](/docs/img/10Datepicker.PNG "Preview")

# Advanced Custom DatePicker
## Custom Select Date
Arguments:
DotAttributeVCalendar,
HighlightAttributeVCalendar,
BarAttributeVCalendar
###Dot
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\DotAttributeVCalendar;

->selectAttribute(
    (new DotAttributeVCalendar("orange"))
)
```
![Screenshot11](/docs/img/11Datepicker.PNG "Preview")

### Highlight
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\HighlightAttributeVCalendar;

->selectAttribute(
    (new HighlightAttributeVCalendar("orange"))
)
```
![Screenshot12](/docs/img/12Datepicker.PNG "Preview")

### Bar
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\BarAttributeVCalendar;

->selectAttribute(
    (new BarAttributeVCalendar("orange"))
)
```
![Screenshot13](/docs/img/13Datepicker.PNG "Preview")

## Popover
Arguments:
ClickPopoverVCalendar,
FocusPopoverVCalendar,
HoverPopoverVCalendar

```
use IziDev\VCalendar\Popover\HoverPopoverVCalendar;

->selectAttribute(
    (new BarAttributeVCalendar("orange"))
        ->popover(new HoverPopoverVCalendar("Fecha de nacimiento"))
)
```
![Screenshot14](/docs/img/14Datepicker.PNG "Preview")

## Add More Select Date
Arguments:
DotAttributeVCalendar,
HighlightAttributeVCalendar,
BarAttributeVCalendar

```
->attributeCalendar(
    (new HighlightAttributeVCalendar('red'))
        ->dates($this->created_at)
        ->popover(new HoverPopoverVCalendar("Creation Record Contact."))
)
->attributeCalendar(
    (new BarAttributeVCalendar('red'))
        ->dates($this->update_at)
        ->popover(new HoverPopoverVCalendar("Update Record Contact."))
)
```
![Screenshot15](/docs/img/15Datepicker.PNG "Preview")

# Advanced Custom Disabled
## Type

|  Object |  Description | Range | 
| ------------ | ------------ | ------------ | 
|  IziDev\VCalendar\Disabled\DaysDisabledDatesVCalendar | Day number from the start or end of the month.	  |1 to 31, -1 to -31 |
|  IziDev\VCalendar\Disabled\WeekdaysDisabledDatesVCalendar | Day of the week.	  |1: Sun to 7: Sat |
|  IziDev\VCalendar\Disabled\WeeksDisabledDatesVCalendar | Week number from the start or end of the month.	  |1 to 6, -1 to -6 |
|  IziDev\VCalendar\Disabled\MonthsDisabledDatesVCalendar | Months of the year.	  |1 to 12 |
|  IziDev\VCalendar\Disabled\YearsDisabledDatesVCalendar | Year numbers.	  |4-digit integer |

```
->disabled(new DaysDisabledDatesVCalendar(9, 16))
```

## Interval

|  Object |  Description 
| ------------ | ------------ 
|  IziDev\VCalendar\Interval\DayliIntervalDatesVCalendar | Interval number of days from the start date (or today when no start date provided).	  
|  IziDev\VCalendar\Interval\WeeklyIntervalDatesVCalendar | Interval number of weeks from the start date (or today).	  
|  IziDev\VCalendar\Interval\MonthlyIntervalDatesVCalendar | Interval number of months from the start date (or today).
|  IziDev\VCalendar\Interval\YearlyIntervalDatesVCalendar | Interval number of years from the start date (or today).

```
->disabled(new WeekdaysDisabledDatesVCalendar(1, 7),new WeeklyIntervalDatesVCalendar(2))
```
![Screenshot16](/docs/img/16Datepicker.PNG "Preview")
