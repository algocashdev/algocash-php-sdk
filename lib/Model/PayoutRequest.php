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

    protected string $invoiceId;
    protected string $amount;
    protected Payer $payer;
    protected string $paymentMethod;
    protected Bank $bank;
    protected Url $url;

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
        $this->invoiceId = $invoiceId;
        $this->amount = $amount;
        $this->payer = $payer;
        $this->paymentMethod = $paymentMethod;
        $this->bank = $bank;
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
                'bank_account' => json_decode($this->bank, true),
                'url' => json_decode($this->url, true)
            ]
        );
    }
}
