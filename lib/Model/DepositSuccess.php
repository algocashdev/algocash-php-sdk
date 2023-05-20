<?php

namespace Algocash\Model;

/**
 * DepositSuccess Class
 *
 */
class DepositSuccess
{
    /**
     * @var string
     */
    public $redirectUrl;
    
    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $merchantInvoiceId;

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
        $this->redirectUrl = $data['redirect_url'];
    }
}