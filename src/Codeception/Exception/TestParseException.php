<?php 
namespace Codeception\Exception;

class TestParseException extends \Exception
{
    public function __construct($testBody)
    {
        $this->message = "Couldn't parse \n\n$testBody";
    }
}