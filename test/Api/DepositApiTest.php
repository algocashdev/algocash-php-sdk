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
        // $algo->setHost('https://testapi2.algorithmic.cash');

        $apiInstance = new DepositApi($algo);
        $address = new Address();
        $payer = new Payer("test@gmail.com", "+918885916123", $address);
        $url = new Url("https://localhost:8080/callback", "https://localhost:8080/pending", "https://localhost:8080/success", "https://localhost:8080/error");
        $body = new DepositRequest("134670002", "100", $payer, $url, "UPI");

        try {
            $result = $apiInstance->createDeposit($body);
            print_r($result);
        } catch (\Algocash\ApiException $e) {
            echo 'Api Exception when calling DepositApi->createDeposit: ', json_encode($e->getError()), PHP_EOL;
        } catch (\Exception $e) {
            echo 'Exception when calling DepositApi->createDeposit: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for requestDepositStatus
     *
     * request deposit status.
     *
     */
    public function testRequestDepositStatus()
    {
        $algo = Algocash::getInstance()
            ->setApiKey('sWBYGvzA61ITU4Vh', 'OfeR3xi59rLAM9c1')
            ->setAccessToken('4q4epHrbUHykQwnc')
            ->enableProdMode(false);
        // $algo->setHost('https://testapi2.algorithmic.cash');

        $apiInstance = new DepositApi($algo);

        try {
            $result = $apiInstance->requestDepositStatus("134670002");
            print_r($result);
        } catch (\Algocash\ApiException $e) {
            echo 'Api Exception when calling DepositApi->requestDepositStatus: ', json_encode($e->getError()), PHP_EOL;
        } catch (\Exception $e) {
            echo 'Exception when calling DepositApi->requestDepositStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
}
