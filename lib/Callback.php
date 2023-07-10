<?php 

namespace Algocash;

use Algocash\Model\CallbackPayload;

class Callback
{
    /**
     * @param string payload
     * @param string sig_header
     * @param string secret
     */
    static function constructCallback($payload, $sig_header, $secret)
    {
        $signature = hash_hmac('sha256', $payload, $secret);

        if ($signature != $sig_header) {
            throw new SignatureVerificationException("Signature is invalid");
        }

        try {
            $callback = json_decode($payload);
            return new CallbackPayload($callback);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
