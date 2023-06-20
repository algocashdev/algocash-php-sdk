<?php
namespace Algocash\Api;

use Algocash\Algocash;
use Algocash\Model\PayoutRequest;
use Algocash\Model\PayoutResponse;
use Algocash\Response;

class PayoutApi
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
     * Operation createPayout
     *
     * create payout
     * @param PayoutRequest $body
     *
     * @throws \Algocash\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Algocash\Model\PayoutResponse
     */
    public function createPayout($body)
    {
        $response = $this->request('/payout', json_decode($body, true), 'POST');
        return new PayoutResponse($response->contents());
    }  
}
