<?php

namespace Vali;

use Respect\Validation\Validator as v;

class CustomValidator extends \Illuminate\Validation\Validator
{

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return int
     */
    public function validateJpZipCode($attribute, $value, $parameters)
    {
        return preg_match("/^[0-9\-]{7,8}+$/i", $value);
    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function validateCreditCard($attribute, $value, $parameters)
    {
        return v::creditCard()->validate($value);
    }    
    
}