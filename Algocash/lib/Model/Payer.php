<?php

namespace Algocash\Model;

use Algocash\Model\Address;

/**
 * Payer Class
 *
 */
class Payer
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
     * @param  string $email
     * @param  string $phone
     * @param  Address|null $address
     * @param  string|null $fName
     * @param  string|null $lName
     * @param  string|null $id
     * @param  string|null $document
     *
     */
    public function __construct($email, $phone, $address=null, $fName=null, $lName=null, $id=null, $document=null)
    {
        $this->body = [
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'fName' => $fName,
            'lName' => $lName,
            'document' => $document,
            'id' => $id
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
