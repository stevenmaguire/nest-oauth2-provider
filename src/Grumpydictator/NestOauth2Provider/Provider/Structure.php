<?php

namespace Grumpydictator\NestOauth2Provider\Provider;

/**
 * Class Structure
 *
 * @package Grumpydictator\NestOauth2Provider\Provider
 */
class Structure
{
    public $structure_id;
    public $thermostats     = [];
    public $smoke_co_alarms = [];
    public $away;
    public $name;
    public $country_code;
    public $postal_code;
    public $peak_period_start_time;
    public $peak_period_end_time;
    public $time_zone;
}