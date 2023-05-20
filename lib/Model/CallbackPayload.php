<?php

namespace Algocash\Model;

/**
 * CallbackPayload Class
 *
 */
class CallbackPayload
{
    
    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $merchantInvoiceId;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $fee_amount;

    /**
     * @var string
     */
    public $fee_currency;

    /**
     * @var string
     */
    public $status;

    const TXN_STATUS = [
        'created',
        'pending',
        'expired',
        'canceled',
        'completed',
        'failed',
        'rejected'
    ];

    /**
     * Constructor
     * 
     * @param  array $data
     *
     */
    public function __construct($data)
    {
        $this->transactionId = $data['transaction_id'];
        $this->merchantInvoiceId = $data['merchant_invoice_id'];
        $this->amount = $data['amount'];
        $this->currency = $data['currency'];
        $this->fee_amount = $data['fee_amount'];
        $this->fee_currency = $data['fee_currency'];
        $this->status = $data['status'];
    }
}