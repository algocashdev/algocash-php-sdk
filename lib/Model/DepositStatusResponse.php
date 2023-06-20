<?php

namespace Algocash\Model;

use Algocash\Model\DepositStatusInfo;

/**
 * DepositStatusResponse Class
 *
 */
class DepositStatusResponse
{
    /**
     * @var string
     */
    public $response;
    
    /**
     * @var DepositStatusInfo
     */
    public $info;

    /**
     * Constructor
     * 
     * @param  array $data
     *
     */
    public function __construct($data)
    {
        $this->response = $data['response'];
        $this->info = new DepositStatusInfo($data['info']);
    }
}