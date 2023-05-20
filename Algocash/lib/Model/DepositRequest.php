<?php

namespace Algocash\Model;

use Algocash\Model\Payer;
use Algocash\Model\Url;

/**
 * DepsitRequest Class
 *
 */
class DepositRequest
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
     * @param  Url $url
     *
     */
    public function __construct($invoiceId, $amount, $payer, $paymentMethod, $url)
    {
        $this->body = [
            'invoice_id' => $invoiceId,
            'amount' => $amount,
            'payer' => $payer,
            'payment_method' => $paymentMethod,
            'url' => $url
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
