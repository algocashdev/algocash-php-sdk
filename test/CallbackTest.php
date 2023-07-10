<?php

namespace Algocash;

use Algocash\Algocash;
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

    public function testCallback()
    {
        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['Signature'];

        try {
            /**
             * @var CallbackPayload body
             */
            $body = \Algocash\Callback::constructCallback($payload, $sig_header, 'accessToken');
            http_response_code(200);
        } catch (\Algocash\SignatureVerificationException $e) {
            http_response_code(401);
        }
         catch (\Throwable $th) {
            http_response_code(500);
        }
    }
}
