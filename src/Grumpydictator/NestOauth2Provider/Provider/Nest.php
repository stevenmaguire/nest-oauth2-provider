<?php

namespace Grumpydictator\NestOauth2Provider\Provider;

/**
 * Class Nest
 *
 * @package Grumpydictator\NestOauth2Provider\Provider
 */
class Nest
{
    public $structures = [];

    /**
     * @param array $attributes
     */
    public function __construct(\stdClass $object)
    {
        // create structures:
        foreach ($object->structures as $identifier => $structure) {
            $this->structures[$identifier] = new Structure($structure);
        }

        foreach ($object->devices->thermostats as $identifier => $thermostat) {
            $thermos = new Thermostat($thermostat);
            $this->structures[$thermos->structure_id]->addThermostat($identifier, $thermos);

        }
    }

    /**
     *
     */
    public function toArray()
    {
        $arr = [
            'structures' => []
        ];
        /** @var Structure $structure */
        foreach ($this->structures as $identifier => $structure) {
            $arr['structures'][$identifier] = $structure->toArray();
        }

        return $arr;
    }
}