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

    const NAME_VISA     = 'visa';
    const NAME_MC       = 'mastercard';
    const NAME_MAESTRO  = 'maestro';
    const NAME_AMEX     = 'amex';
    const NAME_JCB      = 'jcb';
    const NAME_DINERS   = 'diners';
    const NAME_DISCOVER = 'discover';
    const NAME_LASER    = 'laser';
    const NAME_SOLO     = 'solo';

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