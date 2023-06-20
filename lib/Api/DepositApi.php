<?php
namespace Algocash\Api;

use Algocash\Algocash;
use Algocash\Model\DepositRequest;
use Algocash\Model\DepositResponse;
use Algocash\Model\DepositStatusResponse;
use Algocash\Response;

class DepositApi
{

    /**
     * @var Algocash
     */
    protected $algocash;

    /**
     * @param Algocash   $algocash
     */
    public function __construct(Algocash $algocash) {
        $this->algocash = $algocash;
    }

    /**
     * @return Response
     */

    private function request($path, $params = [], $type = 'GET') {
        return $this->algocash->request($path, $params, $type);
    }

    /**
     * Operation createDeposit
     *
     * create Deposit
     * @param DepositRequest $body
     *
     * @throws \Algocash\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Algocash\Model\DepositResponse
     */
    public function createDeposit($body)
    {
        $response = $this->request('/payin', json_decode($body, true), 'POST');
        return new DepositResponse($response->contents());
    }  

    /**
     * Operation requestDepositStatus
     *
     * request Deposit Status
     * @param string $invoiceId
     *
     * @throws \Algocash\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Algocash\Model\DepositStatusResponse
     */
    public function requestDepositStatus($invoiceId)
    {
        $response = $this->request('/payin/status/'.$invoiceId);
        return new DepositStatusResponse($response->contents());
    }  
}
