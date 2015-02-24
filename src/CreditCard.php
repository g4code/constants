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
            TYPE_VISA       => NAME_VISA,
            TYPE_MC         => NAME_MC,
            TYPE_MAESTRO    => NAME_MAESTRO,
            TYPE_AMEX       => NAME_AMEX,
            TYPE_JCB        => NAME_JCB,
            TYPE_DINERS     => NAME_DINERS,
            TYPE_DISCOVER   => NAME_DISCOVER,
            TYPE_LASER      => NAME_LASER,
            TYPE_SOLO       => NAME_SOLO,
        ];
    }
}