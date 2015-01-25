<?php namespace App\Validation;

class ResultHandler
{
    public $error;
    public $errorType;
    public $errorMessage;
    public $errorCode;
    public $data= array();
    
    public function __construct( $error, $errorType, $errorMessage, $errorCode, $data)
    {
        
        $this->error = $error;
        $this->errorType = $errorType;
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
        $this->data = $data;
    }
}
