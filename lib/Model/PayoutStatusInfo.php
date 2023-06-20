<?php

namespace Algocash\Model;

/**
 * PayoutStatusInfo Class
 *
 */
class PayoutStatusInfo
{
    /**
     * @var string
     */
    public $id;
    
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $merchantTxId;

    /**
     * @var string
     */
    public $requestAmount;

    /**
     * @var string
     */
    public $requestDt;

    /**
     * @var string
     */
    public $processedDt;

    /**
     * @var string
     */
    public $utrNumber;

    /**
     * Constructor
     * 
     * @param  array $data
     *
     */
    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->status = $data['status'];
        $this->statusCode = $data['status_code'];
        $this->merchantTxId = $data['merchant_tx_id'];
        $this->requestAmount = $data['request_amount'];
        $this->requestDt = $data['request_dt'];
        $this->processedDt = $data['processed_dt'];
        $this->utrNumber = $data['utr_number'];
    }
}