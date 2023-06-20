<?php
namespace Algocash;

use Algocash\Algocash;
use Algocash\Api\PayoutApi;
use Algocash\Model\Address;
use Algocash\Model\Bank;
use Algocash\Model\Payer;
use Algocash\Model\PayoutRequest;
use Algocash\Model\Url;
use PHPUnit\Framework\TestCase;

class PayoutApiTest extends TestCase
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
     * Test case for createPayout
     *
     * create payout.
     *
     */
    public function testCreatePayout()
    {
        $algo = Algocash::getInstance()
            ->setApiKey('sWBYGvzA61ITU4Vh', 'OfeR3xi59rLAM9c1')
            ->setAccessToken('4q4epHrbUHykQwnc')
            ->enableProdMode(false);
        // $algo->setHost('');

        $apiInstance = new PayoutApi($algo);
        $address = new Address();
        $payer = new Payer("test@gmail.com", "+1231243", $address);
        $url = new Url("https://localhsot:8000/callback");
        $bank = new Bank("1231423", "fName lName", "sfsdf","2143");
        $body = new PayoutRequest("100001", "100", $payer, $bank, $url, "UPI");

        try {
            $result = $apiInstance->createPayout($body);
            print_r($result);
        } catch (\Algocash\ApiException $e) {
            echo 'Api Exception when calling PayoutApi->createPayout: ', json_encode($e->getError()), PHP_EOL;
        } catch (\Exception $e) {
            echo 'Exception when calling PayoutApi->createPayout: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function testRequestPayoutStatus()
    {
        $algo = Algocash::getInstance()
            ->setApiKey('sWBYGvzA61ITU4Vh', 'OfeR3xi59rLAM9c1')
            ->setAccessToken('4q4epHrbUHykQwnc')
            ->enableProdMode(false);
        // $algo->setHost('https://testapi2.algorithmic.cash');

        $apiInstance = new PayoutApi($algo);

        try {
            $result = $apiInstance->requestPayoutStatus("100001");
            print_r($result);
        } catch (\Algocash\ApiException $e) {
            echo 'Api Exception when calling PayoutApi->requestPayoutStatus: ', json_encode($e->getError()), PHP_EOL;
        } catch (\Exception $e) {
            echo 'Exception when calling PayoutApi->requestPayoutStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
}
