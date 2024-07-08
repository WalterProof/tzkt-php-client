<?php
/**
 * ContractsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.  You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community  to help developers build more services and dapps on top of Tezos.  TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service, because you can always clone, build and run it yourself to have full control over all the components.  Feel free to contact us if you have any questions or feature requests. Your feedback is much appreciated!  - Discord: https://discord.gg/aG8XKuwsQd - Telegram: https://t.me/baking_bad_chat - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L - Twitter: https://twitter.com/TezosBakingBad - Email: hello@bakingbad.dev  And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊  # Get Started  There are two API services provided for public use: - **Free TzKT API** with free anonymous access; - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.  You can find more details about differences between available tiers [here](https://tzkt.io/api).  ## Free TzKT API  Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality. It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.  > #### Note: attribution required If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).  It's available for the following Tezos networks with the following base URLs:  - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io)) - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io)) - Parisnet: `https://api.parisnet.tzkt.io/` ([view docs](https://api.parisnet.tzkt.io))  ### Sending Requests  To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint (for example, chain's head: `/v1/head`), that's pretty much it:   ```bash curl https://api.tzkt.io/v1/head ```  Read through this documentation to explore available endpoints, query parameters (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.) and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉  ### Rate Limits  Please, refer to https://tzkt.io/api to check relevant rate limits.  If you exceed the limit, the API will respond with `HTTP 429` status code.  ## TzKT Pro  TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA. TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.  It's available for the following Tezos networks with the following base URLs:  - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io)) - Testnets: *let us know if you need TzKT Pro for testnets*  ### Authorization  To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription. This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.  Note that you can have multiple API keys within a single subscription.  Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories. If your key was compromised, just let us know and we will issue a new one.  Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted, but query string is not, so the key can be unintentionally exposed to third parties.  ### Sending Requests  Sending a request with the API key passed as a query string parameter:  ```bash curl https://pro.tzkt.io/v1/head?apikey={your_key} ```  Sending a request with the API key passed via an HTTP header:  ```bash curl https://pro.tzkt.io/v1/head \\     -H 'apikey: {your_key}' ```  ### Rate Limits  Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.  Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests and the time remaining (in seconds) until the quota is reset. Here's an example:  ``` RateLimit-Limit: 50 RateLimit-Remaining: 49 RateLimit-Reset: 1 ```  It also sends general information about your rate limits per second and per day:  ``` X-RateLimit-Limit-Second: 50 X-RateLimit-Remaining-Second: 49 X-RateLimit-Limit-Day: 3000000 X-RateLimit-Remaining-Day: 2994953 ```  If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.14.4
 * Contact: hello@bakingbad.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Bzzhh\Tzkt\ApiException;
use Bzzhh\Tzkt\Configuration;
use Bzzhh\Tzkt\HeaderSelector;
use Bzzhh\Tzkt\ObjectSerializer;

/**
 * ContractsApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContractsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'contractsBuildEntrypointParametersGET' => [
            'application/json',
        ],
        'contractsBuildEntrypointParametersPOST' => [
            'application/json',
        ],
        'contractsGet' => [
            'application/json',
        ],
        'contractsGetBigMapByName' => [
            'application/json',
        ],
        'contractsGetBigMapByNameKeys' => [
            'application/json',
        ],
        'contractsGetBigMaps' => [
            'application/json',
        ],
        'contractsGetByAddress' => [
            'application/json',
        ],
        'contractsGetCode' => [
            'application/json',
        ],
        'contractsGetContractViewByName' => [
            'application/json',
        ],
        'contractsGetContractViews' => [
            'application/json',
        ],
        'contractsGetCount' => [
            'application/json',
        ],
        'contractsGetEntrypointByName' => [
            'application/json',
        ],
        'contractsGetEntrypoints' => [
            'application/json',
        ],
        'contractsGetHistoricalKeys' => [
            'application/json',
        ],
        'contractsGetInterface' => [
            'application/json',
        ],
        'contractsGetKey' => [
            'application/json',
        ],
        'contractsGetKey2' => [
            'application/json',
        ],
        'contractsGetKeyUpdates' => [
            'application/json',
        ],
        'contractsGetRawStorage' => [
            'application/json',
        ],
        'contractsGetRawStorageHistory' => [
            'application/json',
        ],
        'contractsGetRawStorageSchema' => [
            'application/json',
        ],
        'contractsGetSame' => [
            'application/json',
        ],
        'contractsGetSimilar' => [
            'application/json',
        ],
        'contractsGetStorage' => [
            'application/json',
        ],
        'contractsGetStorageHistory' => [
            'application/json',
        ],
        'contractsGetStorageSchema' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation contractsBuildEntrypointParametersGET
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsBuildEntrypointParametersGET($address, $name, $value = null, string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0])
    {
        list($response) = $this->contractsBuildEntrypointParametersGETWithHttpInfo($address, $name, $value, $contentType);
        return $response;
    }

    /**
     * Operation contractsBuildEntrypointParametersGETWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsBuildEntrypointParametersGETWithHttpInfo($address, $name, $value = null, string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0])
    {
        $request = $this->contractsBuildEntrypointParametersGETRequest($address, $name, $value, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsBuildEntrypointParametersGETAsync
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsBuildEntrypointParametersGETAsync($address, $name, $value = null, string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0])
    {
        return $this->contractsBuildEntrypointParametersGETAsyncWithHttpInfo($address, $name, $value, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsBuildEntrypointParametersGETAsyncWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsBuildEntrypointParametersGETAsyncWithHttpInfo($address, $name, $value = null, string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsBuildEntrypointParametersGETRequest($address, $name, $value, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsBuildEntrypointParametersGET'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsBuildEntrypointParametersGETRequest($address, $name, $value = null, string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsBuildEntrypointParametersGET'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsBuildEntrypointParametersGET'
            );
        }



        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}/build';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsBuildEntrypointParametersPOST
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsBuildEntrypointParametersPOST($address, $name, $body, string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0])
    {
        list($response) = $this->contractsBuildEntrypointParametersPOSTWithHttpInfo($address, $name, $body, $contentType);
        return $response;
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsBuildEntrypointParametersPOSTWithHttpInfo($address, $name, $body, string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0])
    {
        $request = $this->contractsBuildEntrypointParametersPOSTRequest($address, $name, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTAsync
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsBuildEntrypointParametersPOSTAsync($address, $name, $body, string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0])
    {
        return $this->contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo($address, $name, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo($address, $name, $body, string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsBuildEntrypointParametersPOSTRequest($address, $name, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsBuildEntrypointParametersPOST'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsBuildEntrypointParametersPOSTRequest($address, $name, $body, string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsBuildEntrypointParametersPOST'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsBuildEntrypointParametersPOST'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling contractsBuildEntrypointParametersPOST'
            );
        }


        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}/build';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGet
     *
     * Get contracts
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Contract[]
     */
    public function contractsGet($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGet'][0])
    {
        list($response) = $this->contractsGetWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetWithHttpInfo
     *
     * Get contracts
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetWithHttpInfo($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGet'][0])
    {
        $request = $this->contractsGetRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Contract[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Contract[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Contract[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetAsync
     *
     * Get contracts
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetAsync($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGet'][0])
    {
        return $this->contractsGetAsyncWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetAsyncWithHttpInfo
     *
     * Get contracts
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetAsyncWithHttpInfo($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGet'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
        $request = $this->contractsGetRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGet'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRequest($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGet'][0])
    {

















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGet, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            'OneOfAddressParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            'OneOfContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tzips,
            'tzips', // param base name
            'OneOfContractTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creator,
            'creator', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $manager,
            'manager', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegate,
            'delegate', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity,
            'firstActivity', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity_time,
            'firstActivityTime', // param base name
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity,
            'lastActivity', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity_time,
            'lastActivityTime', // param base name
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $code_hash,
            'codeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetBigMapByName
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMap
     */
    public function contractsGetBigMapByName($address, $name, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByName'][0])
    {
        list($response) = $this->contractsGetBigMapByNameWithHttpInfo($address, $name, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapByNameWithHttpInfo
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMap, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapByNameWithHttpInfo($address, $name, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByName'][0])
    {
        $request = $this->contractsGetBigMapByNameRequest($address, $name, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMap' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMap' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMap', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMap';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMap',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapByNameAsync
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapByNameAsync($address, $name, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByName'][0])
    {
        return $this->contractsGetBigMapByNameAsyncWithHttpInfo($address, $name, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapByNameAsyncWithHttpInfo
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapByNameAsyncWithHttpInfo($address, $name, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByName'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMap';
        $request = $this->contractsGetBigMapByNameRequest($address, $name, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetBigMapByName'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapByNameRequest($address, $name, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByName'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMapByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetBigMapByName'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetBigMapByNameKeys
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetIdParameter $last_level Filters bigmap keys by the last update level. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMapKey[]
     */
    public function contractsGetBigMapByNameKeys($address, $name, $active = null, $key = null, $value = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0])
    {
        list($response) = $this->contractsGetBigMapByNameKeysWithHttpInfo($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapByNameKeysWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetIdParameter $last_level Filters bigmap keys by the last update level. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMapKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapByNameKeysWithHttpInfo($address, $name, $active = null, $key = null, $value = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0])
    {
        $request = $this->contractsGetBigMapByNameKeysRequest($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMapKey[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMapKey[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMapKey[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMapKey[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMapKey[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapByNameKeysAsync
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetIdParameter $last_level Filters bigmap keys by the last update level. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapByNameKeysAsync($address, $name, $active = null, $key = null, $value = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0])
    {
        return $this->contractsGetBigMapByNameKeysAsyncWithHttpInfo($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapByNameKeysAsyncWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetIdParameter $last_level Filters bigmap keys by the last update level. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapByNameKeysAsyncWithHttpInfo($address, $name, $active = null, $key = null, $value = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMapKey[]';
        $request = $this->contractsGetBigMapByNameKeysRequest($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetBigMapByNameKeys'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetIdParameter $last_level Filters bigmap keys by the last update level. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapByNameKeysRequest($address, $name, $active = null, $key = null, $value = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMapByNameKeys'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetBigMapByNameKeys'
            );
        }








        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMapByNameKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMapByNameKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $key,
            'key', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_level,
            'lastLevel', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetBigMaps
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  BigMapsGetBigMapsTagsParameter $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMap[]
     */
    public function contractsGetBigMaps($address, $tags = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMaps'][0])
    {
        list($response) = $this->contractsGetBigMapsWithHttpInfo($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapsWithHttpInfo
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  BigMapsGetBigMapsTagsParameter $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMap[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapsWithHttpInfo($address, $tags = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMaps'][0])
    {
        $request = $this->contractsGetBigMapsRequest($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMap[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMap[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMap[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMap[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMap[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapsAsync
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  BigMapsGetBigMapsTagsParameter $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapsAsync($address, $tags = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMaps'][0])
    {
        return $this->contractsGetBigMapsAsyncWithHttpInfo($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapsAsyncWithHttpInfo
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  BigMapsGetBigMapsTagsParameter $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetBigMapsAsyncWithHttpInfo($address, $tags = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMaps'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMap[]';
        $request = $this->contractsGetBigMapsRequest($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetBigMaps'
     *
     * @param  string $address Contract address (required)
     * @param  BigMapsGetBigMapsTagsParameter $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapsRequest($address, $tags = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetBigMaps'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMaps'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMaps, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMaps, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tags,
            'tags', // param base name
            'OneOfBigMapTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetByAddress
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Contract
     */
    public function contractsGetByAddress($address, $legacy = true, string $contentType = self::contentTypes['contractsGetByAddress'][0])
    {
        list($response) = $this->contractsGetByAddressWithHttpInfo($address, $legacy, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetByAddressWithHttpInfo
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Contract, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetByAddressWithHttpInfo($address, $legacy = true, string $contentType = self::contentTypes['contractsGetByAddress'][0])
    {
        $request = $this->contractsGetByAddressRequest($address, $legacy, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Contract' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Contract' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Contract', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Contract';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Contract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetByAddressAsync
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetByAddressAsync($address, $legacy = true, string $contentType = self::contentTypes['contractsGetByAddress'][0])
    {
        return $this->contractsGetByAddressAsyncWithHttpInfo($address, $legacy, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetByAddressAsyncWithHttpInfo
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetByAddressAsyncWithHttpInfo($address, $legacy = true, string $contentType = self::contentTypes['contractsGetByAddress'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Contract';
        $request = $this->contractsGetByAddressRequest($address, $legacy, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetByAddress'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetByAddressRequest($address, $legacy = true, string $contentType = self::contentTypes['contractsGetByAddress'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetByAddress'
            );
        }



        $resourcePath = '/v1/contracts/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $legacy,
            'legacy', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetCode
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetCode($address, $level = 0, $format = 0, string $contentType = self::contentTypes['contractsGetCode'][0])
    {
        list($response) = $this->contractsGetCodeWithHttpInfo($address, $level, $format, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetCodeWithHttpInfo
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetCodeWithHttpInfo($address, $level = 0, $format = 0, string $contentType = self::contentTypes['contractsGetCode'][0])
    {
        $request = $this->contractsGetCodeRequest($address, $level, $format, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetCodeAsync
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetCodeAsync($address, $level = 0, $format = 0, string $contentType = self::contentTypes['contractsGetCode'][0])
    {
        return $this->contractsGetCodeAsyncWithHttpInfo($address, $level, $format, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetCodeAsyncWithHttpInfo
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetCodeAsyncWithHttpInfo($address, $level = 0, $format = 0, string $contentType = self::contentTypes['contractsGetCode'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetCodeRequest($address, $level, $format, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetCode'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetCodeRequest($address, $level = 0, $format = 0, string $contentType = self::contentTypes['contractsGetCode'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetCode'
            );
        }


        if ($format !== null && $format > 2) {
            throw new \InvalidArgumentException('invalid value for "$format" when calling ContractsApi.contractsGetCode, must be smaller than or equal to 2.');
        }
        if ($format !== null && $format < 0) {
            throw new \InvalidArgumentException('invalid value for "$format" when calling ContractsApi.contractsGetCode, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $format,
            'format', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetContractViewByName
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\ContractView
     */
    public function contractsGetContractViewByName($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViewByName'][0])
    {
        list($response) = $this->contractsGetContractViewByNameWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetContractViewByNameWithHttpInfo
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\ContractView, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetContractViewByNameWithHttpInfo($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViewByName'][0])
    {
        $request = $this->contractsGetContractViewByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\ContractView' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\ContractView' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\ContractView', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\ContractView';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\ContractView',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetContractViewByNameAsync
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetContractViewByNameAsync($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViewByName'][0])
    {
        return $this->contractsGetContractViewByNameAsyncWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetContractViewByNameAsyncWithHttpInfo
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetContractViewByNameAsyncWithHttpInfo($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViewByName'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\ContractView';
        $request = $this->contractsGetContractViewByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetContractViewByName'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetContractViewByNameRequest($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViewByName'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetContractViewByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetContractViewByName'
            );
        }





        $resourcePath = '/v1/contracts/{address}/views/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetContractViews
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\ContractView[]
     */
    public function contractsGetContractViews($address, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViews'][0])
    {
        list($response) = $this->contractsGetContractViewsWithHttpInfo($address, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetContractViewsWithHttpInfo
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\ContractView[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetContractViewsWithHttpInfo($address, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViews'][0])
    {
        $request = $this->contractsGetContractViewsRequest($address, $json, $micheline, $michelson, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\ContractView[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\ContractView[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\ContractView[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\ContractView[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\ContractView[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetContractViewsAsync
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetContractViewsAsync($address, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViews'][0])
    {
        return $this->contractsGetContractViewsAsyncWithHttpInfo($address, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetContractViewsAsyncWithHttpInfo
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetContractViewsAsyncWithHttpInfo($address, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViews'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\ContractView[]';
        $request = $this->contractsGetContractViewsRequest($address, $json, $micheline, $michelson, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetContractViews'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetContractViewsRequest($address, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetContractViews'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetContractViews'
            );
        }





        $resourcePath = '/v1/contracts/{address}/views';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetCount
     *
     * Get contracts count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function contractsGetCount($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, string $contentType = self::contentTypes['contractsGetCount'][0])
    {
        list($response) = $this->contractsGetCountWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetCountWithHttpInfo
     *
     * Get contracts count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetCountWithHttpInfo($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, string $contentType = self::contentTypes['contractsGetCount'][0])
    {
        $request = $this->contractsGetCountRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('int' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('int' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'int', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'int';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetCountAsync
     *
     * Get contracts count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetCountAsync($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, string $contentType = self::contentTypes['contractsGetCount'][0])
    {
        return $this->contractsGetCountAsyncWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetCountAsyncWithHttpInfo
     *
     * Get contracts count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetCountAsyncWithHttpInfo($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, string $contentType = self::contentTypes['contractsGetCount'][0])
    {
        $returnType = 'int';
        $request = $this->contractsGetCountRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetAddressParameter $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetKindParameter $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  ContractsGetTzipsParameter $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetCountRequest($id = null, $address = null, $kind = null, $tzips = null, $balance = null, $creator = null, $manager = null, $delegate = null, $first_activity = null, $first_activity_time = null, $last_activity = null, $last_activity_time = null, $type_hash = null, $code_hash = null, string $contentType = self::contentTypes['contractsGetCount'][0])
    {
















        $resourcePath = '/v1/contracts/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            'OneOfAddressParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            'OneOfContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tzips,
            'tzips', // param base name
            'OneOfContractTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creator,
            'creator', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $manager,
            'manager', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegate,
            'delegate', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity,
            'firstActivity', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity_time,
            'firstActivityTime', // param base name
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity,
            'lastActivity', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity_time,
            'lastActivityTime', // param base name
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $code_hash,
            'codeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetEntrypointByName
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Entrypoint
     */
    public function contractsGetEntrypointByName($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypointByName'][0])
    {
        list($response) = $this->contractsGetEntrypointByNameWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetEntrypointByNameWithHttpInfo
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Entrypoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetEntrypointByNameWithHttpInfo($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypointByName'][0])
    {
        $request = $this->contractsGetEntrypointByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Entrypoint' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Entrypoint' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Entrypoint', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Entrypoint';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Entrypoint',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetEntrypointByNameAsync
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetEntrypointByNameAsync($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypointByName'][0])
    {
        return $this->contractsGetEntrypointByNameAsyncWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetEntrypointByNameAsyncWithHttpInfo
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetEntrypointByNameAsyncWithHttpInfo($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypointByName'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Entrypoint';
        $request = $this->contractsGetEntrypointByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetEntrypointByName'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetEntrypointByNameRequest($address, $name, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypointByName'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetEntrypointByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetEntrypointByName'
            );
        }





        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetEntrypoints
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Entrypoint[]
     */
    public function contractsGetEntrypoints($address, $all = false, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypoints'][0])
    {
        list($response) = $this->contractsGetEntrypointsWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetEntrypointsWithHttpInfo
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Entrypoint[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetEntrypointsWithHttpInfo($address, $all = false, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypoints'][0])
    {
        $request = $this->contractsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Entrypoint[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Entrypoint[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Entrypoint[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Entrypoint[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Entrypoint[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetEntrypointsAsync
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetEntrypointsAsync($address, $all = false, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypoints'][0])
    {
        return $this->contractsGetEntrypointsAsyncWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetEntrypointsAsyncWithHttpInfo
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetEntrypointsAsyncWithHttpInfo($address, $all = false, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypoints'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Entrypoint[]';
        $request = $this->contractsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetEntrypoints'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetEntrypointsRequest($address, $all = false, $json = true, $micheline = false, $michelson = false, string $contentType = self::contentTypes['contractsGetEntrypoints'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetEntrypoints'
            );
        }






        $resourcePath = '/v1/contracts/{address}/entrypoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $all,
            'all', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetHistoricalKeys
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMapKeyHistorical[]
     */
    public function contractsGetHistoricalKeys($address, $name, $level, $active = null, $key = null, $value = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0])
    {
        list($response) = $this->contractsGetHistoricalKeysWithHttpInfo($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetHistoricalKeysWithHttpInfo
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMapKeyHistorical[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetHistoricalKeysWithHttpInfo($address, $name, $level, $active = null, $key = null, $value = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0])
    {
        $request = $this->contractsGetHistoricalKeysRequest($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetHistoricalKeysAsync
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetHistoricalKeysAsync($address, $name, $level, $active = null, $key = null, $value = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0])
    {
        return $this->contractsGetHistoricalKeysAsyncWithHttpInfo($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetHistoricalKeysAsyncWithHttpInfo
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetHistoricalKeysAsyncWithHttpInfo($address, $name, $level, $active = null, $key = null, $value = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]';
        $request = $this->contractsGetHistoricalKeysRequest($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetHistoricalKeys'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  AccountsGetOperationsParameterParameter $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  AccountsGetOperationsParameterParameter $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetHistoricalKeysRequest($address, $name, $level, $active = null, $key = null, $value = null, $select = null, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetHistoricalKeys'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetHistoricalKeys'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling contractsGetHistoricalKeys'
            );
        }







        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetHistoricalKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetHistoricalKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $key,
            'key', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($level !== null) {
            $resourcePath = str_replace(
                '{' . 'level' . '}',
                ObjectSerializer::toPathValue($level),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetInterface
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\ContractInterface
     */
    public function contractsGetInterface($address, string $contentType = self::contentTypes['contractsGetInterface'][0])
    {
        list($response) = $this->contractsGetInterfaceWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetInterfaceWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\ContractInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetInterfaceWithHttpInfo($address, string $contentType = self::contentTypes['contractsGetInterface'][0])
    {
        $request = $this->contractsGetInterfaceRequest($address, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\ContractInterface' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\ContractInterface' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\ContractInterface', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\ContractInterface';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\ContractInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetInterfaceAsync
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetInterfaceAsync($address, string $contentType = self::contentTypes['contractsGetInterface'][0])
    {
        return $this->contractsGetInterfaceAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetInterfaceAsyncWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetInterfaceAsyncWithHttpInfo($address, string $contentType = self::contentTypes['contractsGetInterface'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\ContractInterface';
        $request = $this->contractsGetInterfaceRequest($address, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetInterface'
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetInterfaceRequest($address, string $contentType = self::contentTypes['contractsGetInterface'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetInterface'
            );
        }


        $resourcePath = '/v1/contracts/{address}/interface';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetKey
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMapKey
     */
    public function contractsGetKey($address, $name, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey'][0])
    {
        list($response) = $this->contractsGetKeyWithHttpInfo($address, $name, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKeyWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMapKey, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKeyWithHttpInfo($address, $name, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey'][0])
    {
        $request = $this->contractsGetKeyRequest($address, $name, $key, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMapKey' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMapKey' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMapKey', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMapKey';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMapKey',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKeyAsync
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKeyAsync($address, $name, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey'][0])
    {
        return $this->contractsGetKeyAsyncWithHttpInfo($address, $name, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKeyAsyncWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKeyAsyncWithHttpInfo($address, $name, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMapKey';
        $request = $this->contractsGetKeyRequest($address, $name, $key, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetKey'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKeyRequest($address, $name, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKey'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKey'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKey'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetKey2
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMapKeyHistorical
     */
    public function contractsGetKey2($address, $name, $level, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey2'][0])
    {
        list($response) = $this->contractsGetKey2WithHttpInfo($address, $name, $level, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKey2WithHttpInfo
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMapKeyHistorical, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKey2WithHttpInfo($address, $name, $level, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey2'][0])
    {
        $request = $this->contractsGetKey2Request($address, $name, $level, $key, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMapKeyHistorical' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMapKeyHistorical' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMapKeyHistorical', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyHistorical';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMapKeyHistorical',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKey2Async
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKey2Async($address, $name, $level, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey2'][0])
    {
        return $this->contractsGetKey2AsyncWithHttpInfo($address, $name, $level, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKey2AsyncWithHttpInfo
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKey2AsyncWithHttpInfo($address, $name, $level, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey2'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyHistorical';
        $request = $this->contractsGetKey2Request($address, $name, $level, $key, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetKey2'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKey2Request($address, $name, $level, $key, $micheline = null, string $contentType = self::contentTypes['contractsGetKey2'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKey2'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($level !== null) {
            $resourcePath = str_replace(
                '{' . 'level' . '}',
                ObjectSerializer::toPathValue($level),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetKeyUpdates
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetSortParameter $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BigMapKeyUpdate[]
     */
    public function contractsGetKeyUpdates($address, $name, $key, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetKeyUpdates'][0])
    {
        list($response) = $this->contractsGetKeyUpdatesWithHttpInfo($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKeyUpdatesWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetSortParameter $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BigMapKeyUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKeyUpdatesWithHttpInfo($address, $name, $key, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetKeyUpdates'][0])
    {
        $request = $this->contractsGetKeyUpdatesRequest($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKeyUpdatesAsync
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetSortParameter $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKeyUpdatesAsync($address, $name, $key, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetKeyUpdates'][0])
    {
        return $this->contractsGetKeyUpdatesAsyncWithHttpInfo($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKeyUpdatesAsyncWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetSortParameter $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetKeyUpdatesAsyncWithHttpInfo($address, $name, $key, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetKeyUpdates'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]';
        $request = $this->contractsGetKeyUpdatesRequest($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetKeyUpdates'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  AccountsGetSortParameter $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKeyUpdatesRequest($address, $name, $key, $sort = null, $offset = null, $limit = 100, $micheline = null, string $contentType = self::contentTypes['contractsGetKeyUpdates'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKeyUpdates'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKeyUpdates'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKeyUpdates'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetKeyUpdates, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetKeyUpdates, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys/{key}/updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'OneOfMichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetRawStorage
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\IMicheline
     */
    public function contractsGetRawStorage($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorage'][0])
    {
        list($response) = $this->contractsGetRawStorageWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageWithHttpInfo
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\IMicheline, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorage'][0])
    {
        $request = $this->contractsGetRawStorageRequest($address, $level, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\IMicheline' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\IMicheline' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\IMicheline', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\IMicheline';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\IMicheline',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageAsync
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageAsync($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorage'][0])
    {
        return $this->contractsGetRawStorageAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageAsyncWithHttpInfo
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageAsyncWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorage'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\IMicheline';
        $request = $this->contractsGetRawStorageRequest($address, $level, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetRawStorage'
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageRequest($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorage'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorage'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/raw';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetRawStorageHistory
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\StorageRecord[]
     */
    public function contractsGetRawStorageHistory($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0])
    {
        list($response) = $this->contractsGetRawStorageHistoryWithHttpInfo($address, $last_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageHistoryWithHttpInfo
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\StorageRecord[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageHistoryWithHttpInfo($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0])
    {
        $request = $this->contractsGetRawStorageHistoryRequest($address, $last_id, $limit, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\StorageRecord[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\StorageRecord[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\StorageRecord[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\StorageRecord[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\StorageRecord[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageHistoryAsync
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageHistoryAsync($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0])
    {
        return $this->contractsGetRawStorageHistoryAsyncWithHttpInfo($address, $last_id, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageHistoryAsyncWithHttpInfo
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageHistoryAsyncWithHttpInfo($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\StorageRecord[]';
        $request = $this->contractsGetRawStorageHistoryRequest($address, $last_id, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetRawStorageHistory'
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageHistoryRequest($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorageHistory'
            );
        }


        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetRawStorageHistory, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetRawStorageHistory, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/storage/raw/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_id,
            'lastId', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetRawStorageSchema
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\IMicheline
     */
    public function contractsGetRawStorageSchema($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0])
    {
        list($response) = $this->contractsGetRawStorageSchemaWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageSchemaWithHttpInfo
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\IMicheline, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageSchemaWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0])
    {
        $request = $this->contractsGetRawStorageSchemaRequest($address, $level, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\IMicheline' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\IMicheline' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\IMicheline', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\IMicheline';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\IMicheline',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageSchemaAsync
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageSchemaAsync($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0])
    {
        return $this->contractsGetRawStorageSchemaAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageSchemaAsyncWithHttpInfo
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetRawStorageSchemaAsyncWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\IMicheline';
        $request = $this->contractsGetRawStorageSchemaRequest($address, $level, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetRawStorageSchema'
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageSchemaRequest($address, $level = 0, string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorageSchema'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/raw/schema';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetSame
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Contract[]
     */
    public function contractsGetSame($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSame'][0])
    {
        list($response) = $this->contractsGetSameWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetSameWithHttpInfo
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetSameWithHttpInfo($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSame'][0])
    {
        $request = $this->contractsGetSameRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Contract[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Contract[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Contract[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetSameAsync
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetSameAsync($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSame'][0])
    {
        return $this->contractsGetSameAsyncWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetSameAsyncWithHttpInfo
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetSameAsyncWithHttpInfo($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSame'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
        $request = $this->contractsGetSameRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetSame'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetSameRequest($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSame'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetSame'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSame, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSame, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts/{address}/same';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetSimilar
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Contract[]
     */
    public function contractsGetSimilar($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSimilar'][0])
    {
        list($response) = $this->contractsGetSimilarWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetSimilarWithHttpInfo
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetSimilarWithHttpInfo($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSimilar'][0])
    {
        $request = $this->contractsGetSimilarRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\Contract[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Contract[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Contract[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetSimilarAsync
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetSimilarAsync($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSimilar'][0])
    {
        return $this->contractsGetSimilarAsyncWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetSimilarAsyncWithHttpInfo
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetSimilarAsyncWithHttpInfo($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSimilar'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Contract[]';
        $request = $this->contractsGetSimilarRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetSimilar'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetSimilarRequest($address, $sort = null, $offset = null, $limit = null, $select = null, $include_storage = false, string $contentType = self::contentTypes['contractsGetSimilar'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetSimilar'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSimilar, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSimilar, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts/{address}/similar';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'OneOfSortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'OneOfOffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            'OneOfSelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetStorage
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetStorage($address, $level = 0, $path = null, string $contentType = self::contentTypes['contractsGetStorage'][0])
    {
        list($response) = $this->contractsGetStorageWithHttpInfo($address, $level, $path, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageWithHttpInfo
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageWithHttpInfo($address, $level = 0, $path = null, string $contentType = self::contentTypes['contractsGetStorage'][0])
    {
        $request = $this->contractsGetStorageRequest($address, $level, $path, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageAsync
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageAsync($address, $level = 0, $path = null, string $contentType = self::contentTypes['contractsGetStorage'][0])
    {
        return $this->contractsGetStorageAsyncWithHttpInfo($address, $level, $path, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageAsyncWithHttpInfo
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageAsyncWithHttpInfo($address, $level = 0, $path = null, string $contentType = self::contentTypes['contractsGetStorage'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetStorageRequest($address, $level, $path, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetStorage'
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageRequest($address, $level = 0, $path = null, string $contentType = self::contentTypes['contractsGetStorage'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorage'
            );
        }




        $resourcePath = '/v1/contracts/{address}/storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $path,
            'path', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetStorageHistory
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\StorageRecord[]
     */
    public function contractsGetStorageHistory($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetStorageHistory'][0])
    {
        list($response) = $this->contractsGetStorageHistoryWithHttpInfo($address, $last_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageHistoryWithHttpInfo
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\StorageRecord[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageHistoryWithHttpInfo($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetStorageHistory'][0])
    {
        $request = $this->contractsGetStorageHistoryRequest($address, $last_id, $limit, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Bzzhh\Tzkt\Model\StorageRecord[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\StorageRecord[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\StorageRecord[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\StorageRecord[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Bzzhh\Tzkt\Model\StorageRecord[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageHistoryAsync
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageHistoryAsync($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetStorageHistory'][0])
    {
        return $this->contractsGetStorageHistoryAsyncWithHttpInfo($address, $last_id, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageHistoryAsyncWithHttpInfo
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageHistoryAsyncWithHttpInfo($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetStorageHistory'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\StorageRecord[]';
        $request = $this->contractsGetStorageHistoryRequest($address, $last_id, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetStorageHistory'
     *
     * @param  string $address Contract address (required)
     * @param  int $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageHistoryRequest($address, $last_id = 0, $limit = 10, string $contentType = self::contentTypes['contractsGetStorageHistory'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorageHistory'
            );
        }


        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetStorageHistory, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetStorageHistory, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/storage/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_id,
            'lastId', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGetStorageSchema
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetStorageSchema($address, $level = 0, string $contentType = self::contentTypes['contractsGetStorageSchema'][0])
    {
        list($response) = $this->contractsGetStorageSchemaWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageSchemaWithHttpInfo
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageSchemaWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetStorageSchema'][0])
    {
        $request = $this->contractsGetStorageSchemaRequest($address, $level, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageSchemaAsync
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageSchemaAsync($address, $level = 0, string $contentType = self::contentTypes['contractsGetStorageSchema'][0])
    {
        return $this->contractsGetStorageSchemaAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageSchemaAsyncWithHttpInfo
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contractsGetStorageSchemaAsyncWithHttpInfo($address, $level = 0, string $contentType = self::contentTypes['contractsGetStorageSchema'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetStorageSchemaRequest($address, $level, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contractsGetStorageSchema'
     *
     * @param  string $address Contract address (required)
     * @param  int $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageSchemaRequest($address, $level = 0, string $contentType = self::contentTypes['contractsGetStorageSchema'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorageSchema'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/schema';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
