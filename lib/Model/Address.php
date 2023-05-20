<?php

namespace Algocash\Model;

/**
 * Address Class
 *
 */
class Address
{

    protected string|null $street;
    protected string|null $city;
    protected string|null $state;
    protected string|null $zipCode;

    /**
     * Constructor
     * 
     * @param  string|null $street
     * @param  string|null $city
     * @param  string|null $state
     * @param  string|null $zipCode
     *
     */
    public function __construct($street=null, $city=null, $state=null, $zipCode=null)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    public function __toString()
    {
        return json_encode([
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zipCode' => $this->zipCode
        ]) ;
    }
}
