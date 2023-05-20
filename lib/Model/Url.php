<?php

namespace Algocash\Model;

/**
 * Url Class
 *
 */
class Url
{

    protected string $callbackUrl;
    protected string|null $pendingUrl;
    protected string|null $successUrl;
    protected string|null $errorUrl;
    protected string|null $backUrl;

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
        $this->callbackUrl = $callbackUrl;
        $this->pendingUrl = $pendingUrl;
        $this->successUrl = $successUrl;
        $this->errorUrl = $errorUrl;
        $this->backUrl = $backUrl;
    }

    public function __toString()
    {
        return json_encode(
            [
                'callback_url' => $this->callbackUrl,
                'pending_url' => $this->pendingUrl,
                'success_url' => $this->successUrl,
                'error_url' => $this->errorUrl,
                'back_url' => $this->backUrl
            ]
        );
    }
}
