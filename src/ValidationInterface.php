<?php

namespace Fabstract\Component\Validator;

interface ValidationInterface
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value);

    /**
     * @return string
     */
    public function getMessage();
}
