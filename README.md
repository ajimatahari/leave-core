[![Build Status](https://travis-ci.org/cleaniquecoders/leave.svg?branch=master)](https://travis-ci.org/cleaniquecoders/leave) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/leave/v/stable)](https://packagist.org/packages/cleaniquecoders/leave) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/leave/downloads)](https://packagist.org/packages/cleaniquecoders/leave) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/cleaniquecoders/leave/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cleaniquecoders/leave/?branch=master) [![License](https://poser.pugx.org/cleaniquecoders/leave/license)](https://packagist.org/packages/cleaniquecoders/leave)

# Leave

*Leave* is a PHP package to capture date and time in or out on particular event. The event can be attendance system, asset check in and check out from the premise and many more.

*Leave* enabled developer to be consistent with capturing event date and time, plus it helps developers to implement their own logic based on their own system workflow.

## Installation

```
$ composer require cleaniquecoders/leave
```

## Usage

`cleaniquecoders/leave` provide interfaces for you to implement based on your system workflow.

Following are the interfaces available for developers to use:

```php

// This is the main contract
use CleaniqueCoders\Leave\Contracts\Leave;

// This is for Date
use CleaniqueCoders\Leave\Contracts\Date;

// This is for Date Format
use CleaniqueCoders\Leave\Contracts\DateFormat;

// This is for Date Range
use CleaniqueCoders\Leave\Contracts\DateRange;
```

## Test

```
$ vendor/bin/phpunit
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
