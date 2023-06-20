<?php

namespace Algocash\Model;

use Algocash\Model\Payer;
use Algocash\Model\Url;

/**
 * DepositRequest Class
 *
 */
class DepositRequest
{

    protected string $invoiceId;
    protected string $amount;
    protected Payer $payer;
    protected string $paymentMethod;
    protected Url $url;

    /**
     * Constructor
     * 
     * @param  string $invoiceId
     * @param  string $amount
     * @param  Payer $payer
     * @param  Url $url
     * @param  string|null $paymentMethod
     *
     */
    public function __construct($invoiceId, $amount, $payer, $url, $paymentMethod=null)
    {
        $this->invoiceId = $invoiceId;
        $this->amount = $amount;
        $this->payer = $payer;
        $this->paymentMethod = $paymentMethod;
        $this->url = $url;
    }

    public function __toString()
    {
        return json_encode(
            [
                'invoice_id' => $this->invoiceId,
                'amount' => $this->amount,
                'payer' => json_decode($this->payer, true),
                'payment_method' => $this->paymentMethod,
                'url' => json_decode($this->url, true)
            ]
        );
    }
}
