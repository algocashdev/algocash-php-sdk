<?php 

namespace Algocash;

use GuzzleHttp\Client;
use Algocash\Response;
use Exception;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class Request
{
    /**
     * Algocash access
     *
     * @return Algocash
     */
    private $algocash;

    /**
     * Guzzle Client
     *
     * @return GuzzleHttp\Client
     */
    private $client;

    /**
     * Start the class()
     *
     */
    public function __construct(Algocash $algocash, $timeout = 4)
    {
        $this->algocash = $algocash;

        $this->client = new Client([
            'base_uri' => $this->algocash->getHost(),
            'timeout'  => $timeout
        ]);
    }

    /**
     * send()
     *
     * Send request
     *
     * @return \Algocash\Response
     */
    public function send($path, $params = [], $type = 'GET')
    {
        // build and prepare our full path rul
        $url = $this->prepareUrl($path, $params);

        // lets track how long it takes for this request
        $seconds = 0;

        $auth = base64_encode($this->algocash->getApiKey().':'.$this->algocash->getSecret());
        $signature = hash('sha256', json_encode($params).$this->algocash->getAccessToken());

        try {
            // push request
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic '.$auth,
                    'Signature' => $signature
                ]
            ];
            if($type == 'GET') $options['query'] = $params;
            else $options['json'] = $params;
            
            $request = $this->client->request($type, $url, $options);

            $res = new Response($request, $seconds);

            if ($request->getStatusCode() === 500) {
                throw new ApiException($res->contents());
            }  
        }
         catch (ClientException  $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $erroObj = json_decode($responseBodyAsString);
            throw new Exception($erroObj->message);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $erroObj = json_decode($responseBodyAsString);
            throw new Exception($erroObj->message);
        }

        return $res;

    }

    /**
     * stream()
     *
     * Send request
     *
     * @return array
     */
    public function stream($handle, $params = [])
    {
        // build and prepare our full path rul
        $url = $this->prepareUrl($handle, $params);

        // lets track how long it takes for this request
        $seconds = 0;

        $auth = base64_encode($this->alpaca->getAuthKeys()[0].':'.$this->alpaca->getAuthKeys()[1]);

        try {
            // push request
            $options = [
                'http' => [
                    'method'=>"GET",
                    'jquery' => $params,
                    'header' => [
                        'Authorization' => 'Basic '.$auth,
                    ],
                ]
            ];
            
            $context = stream_context_create($options);

            /* Sends an http request to www.example.com
            with additional headers shown above */
            $fp = fopen($this->alpaca->getRoot().$url, 'r', false, $context);
        }
         catch (ClientException  $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $erroObj = json_decode($responseBodyAsString);
            throw new Exception($erroObj->message);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $erroObj = json_decode($responseBodyAsString);
            throw new Exception($erroObj->message);
        }

        // send and return the request response
        return $fp;
    }

    /**
     * prepareUrl()
     *
     * Get and prepare the url
     *
     * @return string
     */
    private function prepareUrl($handle, $segments = [])
    {
        $url = $this->alpaca->getPath($handle);

        foreach($segments as $segment=>$value) {
            if (gettype($value) == 'string') {
                $url = str_replace('{'.$segment.'}', $value, $url);
                $url = str_replace(':'.$segment, $value, $url);
            }
        }

        return $url;
    }
}
