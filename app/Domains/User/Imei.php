<?php

namespace App\Domains\User;

use App\Domains\Auth\Credential\Type;
use App\Domains\Base\ValueObject\NullableStringValueObject;

class Imei extends NullableStringValueObject implements ISocialID
{
    /**
     * @return Type
     */
    public function getLoginType(): Type
    {
        return new Type(Type::GUEST);
    }
}