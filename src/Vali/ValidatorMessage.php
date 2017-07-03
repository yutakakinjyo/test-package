<?php

namespace Vali;

class ValidatorMessage
{
    public static function customValidateMessages() {
        return include __DIR__."/../../resources/lang/jp/validation.php";
    }
}
    