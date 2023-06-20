<?php

namespace Algocash\Model;

use Algocash\Model\PayoutStatusInfo;

/**
 * PayoutStatusResponse Class
 *
 */
class PayoutStatusResponse
{
    /**
     * @var string
     */
    public $response;
    
    /**
     * @var PayoutStatusInfo
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
        $this->info = new PayoutStatusInfo($data['info']);
    }
}