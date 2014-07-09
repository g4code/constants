<?php

namespace G4\Constats;

use G4\Constats\Time;

class CacheLifetime
{
    const LIFETIME_XXXS = Time::MINUTE_01;
    const LIFETIME_XXS  = Time::MINUTE_05;
    const LIFETIME_XS   = Time::MINUTE_10;
    const LIFETIME_S    = Time::HOUR_01;
    const LIFETIME_M    = Time::HOUR_06;
    const LIFETIME_L    = Time::DAY_01;
    const LIFETIME_XL   = Time::DAY_07;
    const LIFETIME_XXL  = Time::DAY_14;
    const LIFETIME_XXXL = Time::DAY_30;
}