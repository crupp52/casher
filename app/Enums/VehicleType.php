<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class VehicleType extends Enum
{
    const Car    = 0;
    const Pickup = 1;
    const Van    = 2;
    const Bus    = 3;
    const Truck  = 4;
    const Other  = 5;
}
