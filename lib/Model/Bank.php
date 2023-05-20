<?php

namespace Algocash\Model;

/**
 * Bank Class
 *
 */
class Bank
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
     * @param  string $bank_account_number
     * @param  string $bank_beneficiary
     * @param  string $bank_account_type
     * @param  string $bank_code
     * @param  string|null $bank_branch
     *
     */
    public function __construct($bank_account_number, $bank_beneficiary, $bank_account_type, $bank_code, $bank_branch=null)
    {
        $this->body = [
            'bank_account_number' => $bank_account_number,
            'bank_beneficiary' => $bank_beneficiary,
            'bank_account_type' => $bank_account_type,
            'bank_code' => $bank_code,
            'bank_branch' => $bank_branch
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
