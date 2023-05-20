<?php

namespace Algocash\Model;

/**
 * Address Class
 *
 */
class Address
{

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $body = [];

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
        $this->body = [
            'street' => $street,
            'city' => $city,
            'state' => $state,
            'zipCode' => $zipCode
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
