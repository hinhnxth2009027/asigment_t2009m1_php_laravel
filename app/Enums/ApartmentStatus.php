<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ApartmentStatus extends Enum
{

    const NoActive =   1;
    const Active =   2;
    const Delete = 3;
}
