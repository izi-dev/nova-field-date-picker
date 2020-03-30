# Laravel Nova Field Super DatePicker
[![GitHub license](https://img.shields.io/github/license/MohmmedAshraf/nova-fields-agent.svg)](https://github.com/MohmmedAshraf/nova-fields-agent/blob/master/LICENSE.md)


## Description
An elegant calendar and datepicker Field for laravel nova based on https://vcalendar.io/.

## Screenshots
![Screenshot1](https://novapackages.com//storage/screenshots/3Ww3jLHOalv9LLQt6DAe8uJMJW1Rc4pM8aJVe8wC.png "Preview")
![Screenshot2](https://novapackages.com//storage/screenshots/GqMFuZXQuiTPYXHJ5EasFhMZFGFNsgpfhLqfxXnb.png "Preview")

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
![Screenshot3](https://novapackages.com//storage/screenshots/no611KThB5A7qHjvtxasvk2UtLX76qXKBnc0Fz7G.png "Preview")

## Dark Mode

```
->isDark()
```
![Screenshot4](https://novapackages.com//storage/screenshots/Df0oL1OKzpGLyF4g45JIzJEuw837bdmwQvqDH4qo.png "Preview")

## Color

```
->color("red") //gray, red, orange, yellow, green, teal, blue, indigo, purple, pink.
```

![Screenshot6](https://novapackages.com//storage/screenshots/6Ql2KpNVSMj6LUVUEbEUWWdAP7HXGDirAKUPS2Og.png "Preview")

## Inline
```
->isInline() 
```

![Screenshot5](https://novapackages.com//storage/screenshots/G7lQOVPfOPJMo50B5cuhUU8Mttsh7BNUX5gpBCQ9.png "Preview")


## Disabled Dates

```
->disabledDates("2020-03-23")
->disabledDates("2020-03-25","2020-03-24")
->disabledDates(["2020-03-25","2020-03-26"])
```

![Screenshot7](https://novapackages.com//storage/screenshots/LWvQQEK2Ce2elr7lQWxQVnQMTubZEDpaN5B8F4Rs.png "Preview")

## Format

```
->format("YYYY/MM/DD")
```

![Screenshot8](https://novapackages.com//storage/screenshots/2cT45HLJmyAsPgWDYjmU7KyV1AB9UkDkcZIjcmIu.png "Preview")

## Locale

```
->locale("en")
```

![Screenshot9](https://novapackages.com//storage/screenshots/I3Hy4eEiOxr41VHb1j1VE1s5JdJcTKiGSgnbICOk.png "Preview")

## Min && Max Date

```
->minDate("2020-03-01")
->maxDate("2020-03-31")
```

# Advanced Custom DatePicker
## Custom Select Date
Arguments:
DotAttributeVCalendar,
HighlightAttributeVCalendar,
BarAttributeVCalendar

### Dot
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\DotAttributeVCalendar;

->selectAttribute(
    (new DotAttributeVCalendar("orange"))
)
```
![Screenshot11](https://novapackages.com//storage/screenshots/WBh4HhNiAxYh8EwMCVf0ZlYOp1UzRBQDg87sB0F8.png "Preview")

### Highlight
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\HighlightAttributeVCalendar;

->selectAttribute(
    (new HighlightAttributeVCalendar("orange"))
)
```
![Screenshot12](https://novapackages.com//storage/screenshots/NGNYxBPQQ8DPcjn6a0Rop5rzJ2m84P1gZFxQRnTk.png "Preview")

### Bar
Arguments: null, true, gray, red, orange, yellow, green, teal, blue, indigo, purple, pink
```
use IziDev\VCalendar\Attributes\BarAttributeVCalendar;

->selectAttribute(
    (new BarAttributeVCalendar("orange"))
)
```
![Screenshot13](https://novapackages.com//storage/screenshots/NgvTHduxKYsRTSptmfHebwl5Wl8w2vJdzg4kZ0bH.png "Preview")

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
![Screenshot14](https://novapackages.com//storage/screenshots/zgiWFHMb6T1RYhplIMcgqR6gRgac1x3TisIrS8ij.png "Preview")

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
![Screenshot15](https://novapackages.com//storage/screenshots/bUdiqh7xzqQ0aUmN2ms5kr6E5A19eZGIyn1472mh.png "Preview")

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
![Screenshot16](https://novapackages.com//storage/screenshots/2JiaXsxqEu00KgWEFpeql55Kz29n8A3omY02Bohe.png "Preview")
