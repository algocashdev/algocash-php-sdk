<?php
namespace Algocash\Api;

use Algocash\Algocash;
use Algocash\Model\PayoutRequest;
use Algocash\Model\PayoutSuccess;
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
     * @return \Algocash\Model\PayoutSuccess
     */
    public function createPayout($body)
    {
        $response = $this->request('/payout', $body, 'POST');
        return new PayoutSuccess($response->contents());
    }  
}
