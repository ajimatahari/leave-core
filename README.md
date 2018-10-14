[![Build Status](https://travis-ci.org/cleaniquecoders/leave-core.svg?branch=master)](https://travis-ci.org/cleaniquecoders/leave-core) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/leave-core/v/stable)](https://packagist.org/packages/cleaniquecoders/leave-core) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/leave-core/downloads)](https://packagist.org/packages/cleaniquecoders/leave-core) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/cleaniquecoders/leave-core/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cleaniquecoders/leave-core/?branch=master) [![License](https://poser.pugx.org/cleaniquecoders/leave-core/license)](https://packagist.org/packages/cleaniquecoders/leave-core)

# Leave

*Leave* is a PHP package to capture date and time in or out on particular event. The event can be attendance system, asset check in and check out from the premise and many more.

*Leave* enabled developer to be consistent with capturing event date and time, plus it helps developers to implement their own logic based on their own system workflow.

## Installation

```
$ composer require cleaniquecoders/leave-core
```

## Usage

`cleaniquecoders/leave-core` provide contracts(interfaces) for you to implement based on your system workflow.

Following are the contracts available for developers to use:

```php
<?php

// add leave detail and list of leave details
use CleaniqueCoders\Leave\Contracts\Leave;

// get the title, purpose of the leave application
use CleaniqueCoders\Leave\Contracts\Detail;

// add leave date, list of leave dates and number of days of leave
use CleaniqueCoders\Leave\Contracts\Date;

// add all dates based on date range given
use CleaniqueCoders\Leave\Contracts\DateRange;

// check is weekend / weekday, get weekend days
use CleaniqueCoders\Leave\Contracts\Day;
```

For approval and rejection of leave applications, so far concrete implementation still in progress, but the base contracts already provided:

```php
<?php

// Handle isApproved, approvedBy, approvedAt and approvedRemark
use CleaniqueCoders\Leave\Contracts\Approval;
// Use this contract to user, staff, employee, supervisor
use CleaniqueCoders\Leave\Contracts\Approver;

// Handle isRejected, rejectedBy, rejectedAt and rejectedRemark
use CleaniqueCoders\Leave\Contracts\Rejection;
// Use this contract to user, staff, employee, supervisor
use CleaniqueCoders\Leave\Contracts\Rejector;
```

## Test

```
$ vendor/bin/phpunit
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
