<?php

namespace Algocash\Model;

/**
 * DepositStatusInfo Class
 *
 */
class DepositStatusInfo
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
    public $collectedAmount;

    /**
     * @var string
     */
    public $feeAmount;

    /**
     * @var string
     */
    public $chargebackStatus;

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
        $this->collectedAmount = $data['collected_amount'];
        $this->feeAmount = $data['fee_amount'];
        $this->chargebackStatus = $data['chargeback_status'];
    }
}