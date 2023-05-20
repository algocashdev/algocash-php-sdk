<?php
namespace Algocash\Api;

use Algocash\Algocash;
use Algocash\Model\DepositRequest;
use Algocash\Model\DepositSuccess;
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
     * @return \Algocash\Model\DepositSuccess
     */
    public function createDeposit($body)
    {
        $response = $this->request('/payin', json_decode($body, true), 'POST');
        return new DepositSuccess($response->contents());
    }  
}
