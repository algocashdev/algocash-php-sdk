<?php

namespace Algocash;

use Algocash\Algocash;
use Algocash\Api\DepositApi;
use Algocash\Model\Address;
use Algocash\Model\DepositRequest;
use Algocash\Model\Payer;
use Algocash\Model\Url;
use PHPUnit\Framework\TestCase;

class DepositApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createDeposit
     *
     * create a deposit.
     *
     */
    public function testCreateDeposit()
    {
        $algo = Algocash::getInstance()
            ->setApiKey('sWBYGvzA61ITU4Vh', 'OfeR3xi59rLAM9c1')
            ->setAccessToken('4q4epHrbUHykQwnc')
            ->enableProdMode(false);
        // $algo->setHost('');

        $apiInstance = new DepositApi($algo);
        $address = new Address();
        $payer = new Payer("test@gmail.com", "+1231243", $address);
        $url = new Url("https://localhsot:8000/callback", "https://localhsot:8000/pending", "https://localhsot:8000/success", "https://localhsot:8000/error");
        $body = new DepositRequest("100001", "100", $payer, "UPI", $url);

        try {
            $result = $apiInstance->createDeposit($body);
            print_r($result);
        } catch (\Algocash\ApiException $e) {
            echo 'Api Exception when calling DepositApi->createDeposit: ', json_encode($e->getError()), PHP_EOL;
        } catch (\Exception $e) {
            echo 'Exception when calling DepositApi->createDeposit: ', $e->getMessage(), PHP_EOL;
        }
    }
}
