<?php


class GETCustomerV1Request extends Model
{
    public function __construct()
    {
        $this->setProperty("Id", [new RequireValidator()]);  
        
        parent::__construct();
    }
}