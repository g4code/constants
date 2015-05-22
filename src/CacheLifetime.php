<?php

namespace G4\Constants;

use G4\Constants\Time;

class CacheLifetime
{
    const LIFETIME_XXXXS = Time::MINUTE_01;
    const LIFETIME_XXXS  = Time::MINUTE_05;
    const LIFETIME_XXS   = Time::MINUTE_15;
    const LIFETIME_XS    = Time::MINUTE_30;
    const LIFETIME_S     = Time::HOUR_01;
    const LIFETIME_M     = Time::HOUR_06;
    const LIFETIME_L     = Time::HOUR_12;
    const LIFETIME_XL    = Time::DAY_01;
    const LIFETIME_XXL   = Time::DAY_07;
    const LIFETIME_XXXL  = Time::DAY_14;
    const LIFETIME_XXXXL = Time::DAY_30;

    const TILL_THE_END_OF_TIME = 0;
}