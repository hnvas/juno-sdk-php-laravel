<?php

namespace Jetimob\Juno\Exception;

class JunoResponseException extends JunoException
{
    public function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
