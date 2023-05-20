<?php

namespace Algocash\Model;

/**
 * Url Class
 *
 */
class Url
{

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $body = [];

    /**
     * Constructor
     * 
     * @param  string $callbackUrl
     * @param  string|null $pendingUrl
     * @param  string|null $successUrl
     * @param  string|null $errorUrl
     * @param  string|null $backUrl
     *
     */
    public function __construct($callbackUrl, $pendingUrl=null, $successUrl=null, $errorUrl=null, $backUrl=null)
    {
        $this->body = [
            'callback_url' => $callbackUrl,
            'pending_url' => $pendingUrl,
            'success_url' => $successUrl,
            'error_url' => $errorUrl,
            'back_url' => $backUrl
        ];
    }

    public function __serialize(): array
    {
        return $this->body;
    }
}
