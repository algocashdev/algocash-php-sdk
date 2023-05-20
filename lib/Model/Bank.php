<?php

namespace Algocash\Model;

/**
 * Bank Class
 *
 */
class Bank
{

    protected string $bank_account_number;
    protected string $bank_beneficiary;
    protected string $bank_account_type;
    protected string $bank_code;
    protected string|null $bank_branch;

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
        $this->bank_account_number = $bank_account_number;
        $this->bank_beneficiary = $bank_beneficiary;
        $this->bank_account_type = $bank_account_type;
        $this->bank_code = $bank_code;
        $this->bank_branch = $bank_branch;
    }

    public function __toString()
    {
        return json_encode(
            [
                'bank_account_number' => $this->bank_account_number,
                'bank_beneficiary' => $this->bank_beneficiary,
                'bank_account_type' => $this->bank_account_type,
                'bank_code' => $this->bank_code,
                'bank_branch' => $this->bank_branch
            ]
        );
    }
}
