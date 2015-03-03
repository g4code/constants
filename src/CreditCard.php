<?php

namespace G4\Constants;

class CreditCard
{
    const TYPE_VISA     = 'visa';
    const TYPE_MC       = 'mastercard';
    const TYPE_MAESTRO  = 'maestro';
    const TYPE_AMEX     = 'amex';
    const TYPE_JCB      = 'jcb';
    const TYPE_DINERS   = 'diners';
    const TYPE_DISCOVER = 'discover';
    const TYPE_LASER    = 'laser';
    const TYPE_SOLO     = 'solo';

    const NAME_VISA     = 'Visa';
    const NAME_MC       = 'MasterCard';
    const NAME_MAESTRO  = 'Maestro';
    const NAME_AMEX     = 'Amex';
    const NAME_JCB      = 'Jcb';
    const NAME_DINERS   = 'Diners';
    const NAME_DISCOVER = 'Discover';
    const NAME_LASER    = 'Laser';
    const NAME_SOLO     = 'Solo';

    public static function getAll()
    {
        return [
            self::TYPE_VISA       => self::NAME_VISA,
            self::TYPE_MC         => self::NAME_MC,
            self::TYPE_MAESTRO    => self::NAME_MAESTRO,
            self::TYPE_AMEX       => self::NAME_AMEX,
            self::TYPE_JCB        => self::NAME_JCB,
            self::TYPE_DINERS     => self::NAME_DINERS,
            self::TYPE_DISCOVER   => self::NAME_DISCOVER,
            self::TYPE_LASER      => self::NAME_LASER,
            self::TYPE_SOLO       => self::NAME_SOLO,
        ];
    }
}