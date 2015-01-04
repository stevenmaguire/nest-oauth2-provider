<?php

namespace Grumpydictator\NestOauth2Provider\Provider;

/**
 * Class Device
 *
 * @package Grumpydictator\NestOauth2Provider\Provider
 */
class Device
{
    public $device_id;
    public $locale;
    public $software_version;
    public $structure_id;
    public $name;
    public $name_long;
    public $last_connection;
    public $is_online;
    public $can_cool;
    public $can_heat;
    public $is_using_emergency_heat;
    public $has_fan;
    public $fan_timer_active;
    public $fan_timer_timeout;
    public $has_leaf;
    public $temperature_scale;
    public $target_temperature_f;
    public $target_temperature_c;
    public $target_temperature_high_f;
    public $target_temperature_high_c;
    public $target_temperature_low_f;
    public $target_temperature_low_c;
    public $away_temperature_high_f;
    public $away_temperature_high_c;
    public $away_temperature_low_f;
    public $away_temperature_low_c;
    public $hvac_mode;
    public $ambient_temperature_f;
    public $ambient_temperature_c;
    public $humidity;
}