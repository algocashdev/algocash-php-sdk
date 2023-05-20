<?php

namespace Algocash\Model;

use Algocash\Model\Payer;
use Algocash\Model\Bank;
use Algocash\Model\Url;

/**
 * PayoutRequest Class
 *
 */
class PayoutRequest
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
     * @param  string $invoiceId
     * @param  string $amount
     * @param  Payer $payer
     * @param  string $paymentMethod
     * @param  Bank $bank
     * @param  Url $url
     *
     */
    public function __construct($invoiceId, $amount, $payer, $paymentMethod, $bank, $url)
    {
        $this->body = [
            'invoice_id' => $invoiceId,
            'amount' => $amount,
            'payer' => $payer,
            'payment_method' => $paymentMethod,
            'bank_account' => $bank,
            'url' => $url
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
