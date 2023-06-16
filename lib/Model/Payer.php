<?php

namespace Algocash\Model;

use Algocash\Model\Address;

/**
 * Payer Class
 *
 */
class Payer
{
    protected string $email;
    protected string $phone;
    protected Address|null $address;
    protected string|null $fName;
    protected string|null $lName;
    protected string|null $id;
    protected string|null $document;

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
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->id = $id;
        $this->document = $document;
    }

    public function __toString()
    {
        return json_encode(
            [
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => json_decode($this->address, true),
                'first_name' => $this->fName,
                'last_name' => $this->lName,
                'document' => $this->document,
                'id' => $this->id
            ]
        );
    }
}
