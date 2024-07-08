<?php
/**
 * VotingApi
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
 * VotingApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VotingApi
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
        'votingGetCurrentEpoch' => [
            'application/json',
        ],
        'votingGetCurrentPeriod' => [
            'application/json',
        ],
        'votingGetEpoch' => [
            'application/json',
        ],
        'votingGetEpochs' => [
            'application/json',
        ],
        'votingGetLatestVoting' => [
            'application/json',
        ],
        'votingGetPeriod' => [
            'application/json',
        ],
        'votingGetPeriodVoter' => [
            'application/json',
        ],
        'votingGetPeriodVoter2' => [
            'application/json',
        ],
        'votingGetPeriodVoters' => [
            'application/json',
        ],
        'votingGetPeriodVoters2' => [
            'application/json',
        ],
        'votingGetPeriods' => [
            'application/json',
        ],
        'votingGetProposalByHash' => [
            'application/json',
        ],
        'votingGetProposals' => [
            'application/json',
        ],
        'votingGetProposalsCount' => [
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
     * Operation votingGetCurrentEpoch
     *
     * Get current voting epoch
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentEpoch'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingEpoch
     */
    public function votingGetCurrentEpoch(string $contentType = self::contentTypes['votingGetCurrentEpoch'][0])
    {
        list($response) = $this->votingGetCurrentEpochWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation votingGetCurrentEpochWithHttpInfo
     *
     * Get current voting epoch
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentEpoch'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingEpoch, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetCurrentEpochWithHttpInfo(string $contentType = self::contentTypes['votingGetCurrentEpoch'][0])
    {
        $request = $this->votingGetCurrentEpochRequest($contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingEpoch' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingEpoch' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingEpoch', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
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
                        '\Bzzhh\Tzkt\Model\VotingEpoch',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetCurrentEpochAsync
     *
     * Get current voting epoch
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetCurrentEpochAsync(string $contentType = self::contentTypes['votingGetCurrentEpoch'][0])
    {
        return $this->votingGetCurrentEpochAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetCurrentEpochAsyncWithHttpInfo
     *
     * Get current voting epoch
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetCurrentEpochAsyncWithHttpInfo(string $contentType = self::contentTypes['votingGetCurrentEpoch'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
        $request = $this->votingGetCurrentEpochRequest($contentType);

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
     * Create request for operation 'votingGetCurrentEpoch'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetCurrentEpochRequest(string $contentType = self::contentTypes['votingGetCurrentEpoch'][0])
    {


        $resourcePath = '/v1/voting/epochs/current';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation votingGetCurrentPeriod
     *
     * Get current voting period
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentPeriod'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingPeriod
     */
    public function votingGetCurrentPeriod(string $contentType = self::contentTypes['votingGetCurrentPeriod'][0])
    {
        list($response) = $this->votingGetCurrentPeriodWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation votingGetCurrentPeriodWithHttpInfo
     *
     * Get current voting period
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentPeriod'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingPeriod, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetCurrentPeriodWithHttpInfo(string $contentType = self::contentTypes['votingGetCurrentPeriod'][0])
    {
        $request = $this->votingGetCurrentPeriodRequest($contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingPeriod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingPeriod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingPeriod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod';
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
                        '\Bzzhh\Tzkt\Model\VotingPeriod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetCurrentPeriodAsync
     *
     * Get current voting period
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetCurrentPeriodAsync(string $contentType = self::contentTypes['votingGetCurrentPeriod'][0])
    {
        return $this->votingGetCurrentPeriodAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetCurrentPeriodAsyncWithHttpInfo
     *
     * Get current voting period
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetCurrentPeriodAsyncWithHttpInfo(string $contentType = self::contentTypes['votingGetCurrentPeriod'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod';
        $request = $this->votingGetCurrentPeriodRequest($contentType);

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
     * Create request for operation 'votingGetCurrentPeriod'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetCurrentPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetCurrentPeriodRequest(string $contentType = self::contentTypes['votingGetCurrentPeriod'][0])
    {


        $resourcePath = '/v1/voting/periods/current';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation votingGetEpoch
     *
     * Get voting epoch by index
     *
     * @param  int $index Voting epoch index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpoch'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingEpoch
     */
    public function votingGetEpoch($index, string $contentType = self::contentTypes['votingGetEpoch'][0])
    {
        list($response) = $this->votingGetEpochWithHttpInfo($index, $contentType);
        return $response;
    }

    /**
     * Operation votingGetEpochWithHttpInfo
     *
     * Get voting epoch by index
     *
     * @param  int $index Voting epoch index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpoch'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingEpoch, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetEpochWithHttpInfo($index, string $contentType = self::contentTypes['votingGetEpoch'][0])
    {
        $request = $this->votingGetEpochRequest($index, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingEpoch' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingEpoch' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingEpoch', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
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
                        '\Bzzhh\Tzkt\Model\VotingEpoch',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetEpochAsync
     *
     * Get voting epoch by index
     *
     * @param  int $index Voting epoch index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetEpochAsync($index, string $contentType = self::contentTypes['votingGetEpoch'][0])
    {
        return $this->votingGetEpochAsyncWithHttpInfo($index, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetEpochAsyncWithHttpInfo
     *
     * Get voting epoch by index
     *
     * @param  int $index Voting epoch index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetEpochAsyncWithHttpInfo($index, string $contentType = self::contentTypes['votingGetEpoch'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
        $request = $this->votingGetEpochRequest($index, $contentType);

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
     * Create request for operation 'votingGetEpoch'
     *
     * @param  int $index Voting epoch index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpoch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetEpochRequest($index, string $contentType = self::contentTypes['votingGetEpoch'][0])
    {

        // verify the required parameter 'index' is set
        if ($index === null || (is_array($index) && count($index) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling votingGetEpoch'
            );
        }


        $resourcePath = '/v1/voting/epochs/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($index),
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
     * Operation votingGetEpochs
     *
     * Get voting epochs
     *
     * @param  AccountsGetSortParameter $sort Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpochs'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingEpoch[]
     */
    public function votingGetEpochs($sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetEpochs'][0])
    {
        list($response) = $this->votingGetEpochsWithHttpInfo($sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation votingGetEpochsWithHttpInfo
     *
     * Get voting epochs
     *
     * @param  AccountsGetSortParameter $sort Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpochs'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingEpoch[], HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetEpochsWithHttpInfo($sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetEpochs'][0])
    {
        $request = $this->votingGetEpochsRequest($sort, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingEpoch[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingEpoch[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingEpoch[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch[]';
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
                        '\Bzzhh\Tzkt\Model\VotingEpoch[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetEpochsAsync
     *
     * Get voting epochs
     *
     * @param  AccountsGetSortParameter $sort Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpochs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetEpochsAsync($sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetEpochs'][0])
    {
        return $this->votingGetEpochsAsyncWithHttpInfo($sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetEpochsAsyncWithHttpInfo
     *
     * Get voting epochs
     *
     * @param  AccountsGetSortParameter $sort Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpochs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetEpochsAsyncWithHttpInfo($sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetEpochs'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch[]';
        $request = $this->votingGetEpochsRequest($sort, $offset, $limit, $contentType);

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
     * Create request for operation 'votingGetEpochs'
     *
     * @param  AccountsGetSortParameter $sort Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetEpochs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetEpochsRequest($sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetEpochs'][0])
    {



        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetEpochs, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetEpochs, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/voting/epochs';
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
     * Operation votingGetLatestVoting
     *
     * Get latest voting
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetLatestVoting'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingEpoch
     */
    public function votingGetLatestVoting(string $contentType = self::contentTypes['votingGetLatestVoting'][0])
    {
        list($response) = $this->votingGetLatestVotingWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation votingGetLatestVotingWithHttpInfo
     *
     * Get latest voting
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetLatestVoting'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingEpoch, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetLatestVotingWithHttpInfo(string $contentType = self::contentTypes['votingGetLatestVoting'][0])
    {
        $request = $this->votingGetLatestVotingRequest($contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingEpoch' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingEpoch' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingEpoch', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
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
                        '\Bzzhh\Tzkt\Model\VotingEpoch',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetLatestVotingAsync
     *
     * Get latest voting
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetLatestVoting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetLatestVotingAsync(string $contentType = self::contentTypes['votingGetLatestVoting'][0])
    {
        return $this->votingGetLatestVotingAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetLatestVotingAsyncWithHttpInfo
     *
     * Get latest voting
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetLatestVoting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetLatestVotingAsyncWithHttpInfo(string $contentType = self::contentTypes['votingGetLatestVoting'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingEpoch';
        $request = $this->votingGetLatestVotingRequest($contentType);

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
     * Create request for operation 'votingGetLatestVoting'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetLatestVoting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetLatestVotingRequest(string $contentType = self::contentTypes['votingGetLatestVoting'][0])
    {


        $resourcePath = '/v1/voting/epochs/latest_voting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation votingGetPeriod
     *
     * Get voting period by index
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriod'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingPeriod
     */
    public function votingGetPeriod($index, string $contentType = self::contentTypes['votingGetPeriod'][0])
    {
        list($response) = $this->votingGetPeriodWithHttpInfo($index, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodWithHttpInfo
     *
     * Get voting period by index
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriod'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingPeriod, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodWithHttpInfo($index, string $contentType = self::contentTypes['votingGetPeriod'][0])
    {
        $request = $this->votingGetPeriodRequest($index, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingPeriod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingPeriod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingPeriod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod';
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
                        '\Bzzhh\Tzkt\Model\VotingPeriod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodAsync
     *
     * Get voting period by index
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodAsync($index, string $contentType = self::contentTypes['votingGetPeriod'][0])
    {
        return $this->votingGetPeriodAsyncWithHttpInfo($index, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodAsyncWithHttpInfo
     *
     * Get voting period by index
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodAsyncWithHttpInfo($index, string $contentType = self::contentTypes['votingGetPeriod'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod';
        $request = $this->votingGetPeriodRequest($index, $contentType);

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
     * Create request for operation 'votingGetPeriod'
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodRequest($index, string $contentType = self::contentTypes['votingGetPeriod'][0])
    {

        // verify the required parameter 'index' is set
        if ($index === null || (is_array($index) && count($index) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling votingGetPeriod'
            );
        }


        $resourcePath = '/v1/voting/periods/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($index),
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
     * Operation votingGetPeriodVoter
     *
     * Get period voter
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VoterSnapshot
     */
    public function votingGetPeriodVoter($index, $address, string $contentType = self::contentTypes['votingGetPeriodVoter'][0])
    {
        list($response) = $this->votingGetPeriodVoterWithHttpInfo($index, $address, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodVoterWithHttpInfo
     *
     * Get period voter
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VoterSnapshot, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodVoterWithHttpInfo($index, $address, string $contentType = self::contentTypes['votingGetPeriodVoter'][0])
    {
        $request = $this->votingGetPeriodVoterRequest($index, $address, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VoterSnapshot' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VoterSnapshot' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VoterSnapshot', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot';
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
                        '\Bzzhh\Tzkt\Model\VoterSnapshot',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodVoterAsync
     *
     * Get period voter
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoterAsync($index, $address, string $contentType = self::contentTypes['votingGetPeriodVoter'][0])
    {
        return $this->votingGetPeriodVoterAsyncWithHttpInfo($index, $address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodVoterAsyncWithHttpInfo
     *
     * Get period voter
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoterAsyncWithHttpInfo($index, $address, string $contentType = self::contentTypes['votingGetPeriodVoter'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot';
        $request = $this->votingGetPeriodVoterRequest($index, $address, $contentType);

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
     * Create request for operation 'votingGetPeriodVoter'
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodVoterRequest($index, $address, string $contentType = self::contentTypes['votingGetPeriodVoter'][0])
    {

        // verify the required parameter 'index' is set
        if ($index === null || (is_array($index) && count($index) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling votingGetPeriodVoter'
            );
        }

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling votingGetPeriodVoter'
            );
        }


        $resourcePath = '/v1/voting/periods/{index}/voters/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($index),
                $resourcePath
            );
        }
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
     * Operation votingGetPeriodVoter2
     *
     * Get current period voter
     *
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VoterSnapshot
     */
    public function votingGetPeriodVoter2($address, string $contentType = self::contentTypes['votingGetPeriodVoter2'][0])
    {
        list($response) = $this->votingGetPeriodVoter2WithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodVoter2WithHttpInfo
     *
     * Get current period voter
     *
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VoterSnapshot, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodVoter2WithHttpInfo($address, string $contentType = self::contentTypes['votingGetPeriodVoter2'][0])
    {
        $request = $this->votingGetPeriodVoter2Request($address, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VoterSnapshot' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VoterSnapshot' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VoterSnapshot', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot';
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
                        '\Bzzhh\Tzkt\Model\VoterSnapshot',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodVoter2Async
     *
     * Get current period voter
     *
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoter2Async($address, string $contentType = self::contentTypes['votingGetPeriodVoter2'][0])
    {
        return $this->votingGetPeriodVoter2AsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodVoter2AsyncWithHttpInfo
     *
     * Get current period voter
     *
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoter2AsyncWithHttpInfo($address, string $contentType = self::contentTypes['votingGetPeriodVoter2'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot';
        $request = $this->votingGetPeriodVoter2Request($address, $contentType);

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
     * Create request for operation 'votingGetPeriodVoter2'
     *
     * @param  string $address Voter address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoter2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodVoter2Request($address, string $contentType = self::contentTypes['votingGetPeriodVoter2'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling votingGetPeriodVoter2'
            );
        }


        $resourcePath = '/v1/voting/periods/current/voters/{address}';
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
     * Operation votingGetPeriodVoters
     *
     * Get period voters
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VoterSnapshot[]
     */
    public function votingGetPeriodVoters($index, $status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters'][0])
    {
        list($response) = $this->votingGetPeriodVotersWithHttpInfo($index, $status, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodVotersWithHttpInfo
     *
     * Get period voters
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VoterSnapshot[], HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodVotersWithHttpInfo($index, $status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters'][0])
    {
        $request = $this->votingGetPeriodVotersRequest($index, $status, $sort, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VoterSnapshot[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VoterSnapshot[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VoterSnapshot[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot[]';
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
                        '\Bzzhh\Tzkt\Model\VoterSnapshot[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodVotersAsync
     *
     * Get period voters
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVotersAsync($index, $status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters'][0])
    {
        return $this->votingGetPeriodVotersAsyncWithHttpInfo($index, $status, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodVotersAsyncWithHttpInfo
     *
     * Get period voters
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVotersAsyncWithHttpInfo($index, $status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot[]';
        $request = $this->votingGetPeriodVotersRequest($index, $status, $sort, $offset, $limit, $contentType);

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
     * Create request for operation 'votingGetPeriodVoters'
     *
     * @param  int $index Voting period index starting from zero (required)
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodVotersRequest($index, $status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters'][0])
    {

        // verify the required parameter 'index' is set
        if ($index === null || (is_array($index) && count($index) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling votingGetPeriodVoters'
            );
        }




        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriodVoters, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriodVoters, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/voting/periods/{index}/voters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'OneOfVoterStatusParameter', // openApiType
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


        // path params
        if ($index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($index),
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
     * Operation votingGetPeriodVoters2
     *
     * Get current period voters
     *
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VoterSnapshot[]
     */
    public function votingGetPeriodVoters2($status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters2'][0])
    {
        list($response) = $this->votingGetPeriodVoters2WithHttpInfo($status, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodVoters2WithHttpInfo
     *
     * Get current period voters
     *
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VoterSnapshot[], HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodVoters2WithHttpInfo($status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters2'][0])
    {
        $request = $this->votingGetPeriodVoters2Request($status, $sort, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VoterSnapshot[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VoterSnapshot[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VoterSnapshot[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot[]';
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
                        '\Bzzhh\Tzkt\Model\VoterSnapshot[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodVoters2Async
     *
     * Get current period voters
     *
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoters2Async($status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters2'][0])
    {
        return $this->votingGetPeriodVoters2AsyncWithHttpInfo($status, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodVoters2AsyncWithHttpInfo
     *
     * Get current period voters
     *
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodVoters2AsyncWithHttpInfo($status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters2'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VoterSnapshot[]';
        $request = $this->votingGetPeriodVoters2Request($status, $sort, $offset, $limit, $contentType);

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
     * Create request for operation 'votingGetPeriodVoters2'
     *
     * @param  VotingGetPeriodVotersStatusParameter $status Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) (optional)
     * @param  AccountsGetSortParameter $sort Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriodVoters2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodVoters2Request($status = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriodVoters2'][0])
    {




        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriodVoters2, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriodVoters2, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/voting/periods/current/voters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'OneOfVoterStatusParameter', // openApiType
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
     * Operation votingGetPeriods
     *
     * Get voting periods
     *
     * @param  AccountsGetIdParameter $first_level Filter by level of the first block of the period. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the last block of the period. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriods'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\VotingPeriod[]
     */
    public function votingGetPeriods($first_level = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriods'][0])
    {
        list($response) = $this->votingGetPeriodsWithHttpInfo($first_level, $last_level, $select, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation votingGetPeriodsWithHttpInfo
     *
     * Get voting periods
     *
     * @param  AccountsGetIdParameter $first_level Filter by level of the first block of the period. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the last block of the period. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriods'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\VotingPeriod[], HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetPeriodsWithHttpInfo($first_level = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriods'][0])
    {
        $request = $this->votingGetPeriodsRequest($first_level, $last_level, $select, $sort, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\VotingPeriod[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\VotingPeriod[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\VotingPeriod[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod[]';
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
                        '\Bzzhh\Tzkt\Model\VotingPeriod[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetPeriodsAsync
     *
     * Get voting periods
     *
     * @param  AccountsGetIdParameter $first_level Filter by level of the first block of the period. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the last block of the period. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodsAsync($first_level = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriods'][0])
    {
        return $this->votingGetPeriodsAsyncWithHttpInfo($first_level, $last_level, $select, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetPeriodsAsyncWithHttpInfo
     *
     * Get voting periods
     *
     * @param  AccountsGetIdParameter $first_level Filter by level of the first block of the period. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the last block of the period. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetPeriodsAsyncWithHttpInfo($first_level = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriods'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\VotingPeriod[]';
        $request = $this->votingGetPeriodsRequest($first_level, $last_level, $select, $sort, $offset, $limit, $contentType);

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
     * Create request for operation 'votingGetPeriods'
     *
     * @param  AccountsGetIdParameter $first_level Filter by level of the first block of the period. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the last block of the period. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetPeriods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetPeriodsRequest($first_level = null, $last_level = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetPeriods'][0])
    {






        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriods, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetPeriods, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/voting/periods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_level,
            'firstLevel', // param base name
            'OneOfInt32Parameter', // openApiType
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
     * Operation votingGetProposalByHash
     *
     * Get proposal by hash
     *
     * @param  string $hash Proposal hash (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalByHash'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Proposal
     */
    public function votingGetProposalByHash($hash, string $contentType = self::contentTypes['votingGetProposalByHash'][0])
    {
        list($response) = $this->votingGetProposalByHashWithHttpInfo($hash, $contentType);
        return $response;
    }

    /**
     * Operation votingGetProposalByHashWithHttpInfo
     *
     * Get proposal by hash
     *
     * @param  string $hash Proposal hash (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalByHash'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Proposal, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetProposalByHashWithHttpInfo($hash, string $contentType = self::contentTypes['votingGetProposalByHash'][0])
    {
        $request = $this->votingGetProposalByHashRequest($hash, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Proposal' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Proposal' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Proposal', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Proposal';
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
                        '\Bzzhh\Tzkt\Model\Proposal',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetProposalByHashAsync
     *
     * Get proposal by hash
     *
     * @param  string $hash Proposal hash (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalByHashAsync($hash, string $contentType = self::contentTypes['votingGetProposalByHash'][0])
    {
        return $this->votingGetProposalByHashAsyncWithHttpInfo($hash, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetProposalByHashAsyncWithHttpInfo
     *
     * Get proposal by hash
     *
     * @param  string $hash Proposal hash (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalByHashAsyncWithHttpInfo($hash, string $contentType = self::contentTypes['votingGetProposalByHash'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Proposal';
        $request = $this->votingGetProposalByHashRequest($hash, $contentType);

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
     * Create request for operation 'votingGetProposalByHash'
     *
     * @param  string $hash Proposal hash (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetProposalByHashRequest($hash, string $contentType = self::contentTypes['votingGetProposalByHash'][0])
    {

        // verify the required parameter 'hash' is set
        if ($hash === null || (is_array($hash) && count($hash) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hash when calling votingGetProposalByHash'
            );
        }


        $resourcePath = '/v1/voting/proposals/{hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                '{' . 'hash' . '}',
                ObjectSerializer::toPathValue($hash),
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
     * Operation votingGetProposals
     *
     * Get proposals
     *
     * @param  OperationsGetBallotsProposalParameter $hash Filters proposals by hash (optional)
     * @param  AccountsGetIdParameter $epoch Filters proposals by voting epoch (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposals'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Proposal[]
     */
    public function votingGetProposals($hash = null, $epoch = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetProposals'][0])
    {
        list($response) = $this->votingGetProposalsWithHttpInfo($hash, $epoch, $select, $sort, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation votingGetProposalsWithHttpInfo
     *
     * Get proposals
     *
     * @param  OperationsGetBallotsProposalParameter $hash Filters proposals by hash (optional)
     * @param  AccountsGetIdParameter $epoch Filters proposals by voting epoch (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposals'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Proposal[], HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetProposalsWithHttpInfo($hash = null, $epoch = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetProposals'][0])
    {
        $request = $this->votingGetProposalsRequest($hash, $epoch, $select, $sort, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Proposal[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Proposal[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Proposal[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Proposal[]';
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
                        '\Bzzhh\Tzkt\Model\Proposal[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation votingGetProposalsAsync
     *
     * Get proposals
     *
     * @param  OperationsGetBallotsProposalParameter $hash Filters proposals by hash (optional)
     * @param  AccountsGetIdParameter $epoch Filters proposals by voting epoch (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposals'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalsAsync($hash = null, $epoch = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetProposals'][0])
    {
        return $this->votingGetProposalsAsyncWithHttpInfo($hash, $epoch, $select, $sort, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetProposalsAsyncWithHttpInfo
     *
     * Get proposals
     *
     * @param  OperationsGetBallotsProposalParameter $hash Filters proposals by hash (optional)
     * @param  AccountsGetIdParameter $epoch Filters proposals by voting epoch (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposals'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalsAsyncWithHttpInfo($hash = null, $epoch = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetProposals'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Proposal[]';
        $request = $this->votingGetProposalsRequest($hash, $epoch, $select, $sort, $offset, $limit, $contentType);

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
     * Create request for operation 'votingGetProposals'
     *
     * @param  OperationsGetBallotsProposalParameter $hash Filters proposals by hash (optional)
     * @param  AccountsGetIdParameter $epoch Filters proposals by voting epoch (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;votingPower&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposals'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetProposalsRequest($hash = null, $epoch = null, $select = null, $sort = null, $offset = null, $limit = 100, string $contentType = self::contentTypes['votingGetProposals'][0])
    {






        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetProposals, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling VotingApi.votingGetProposals, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/voting/proposals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $hash,
            'hash', // param base name
            'OneOfProtocolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $epoch,
            'epoch', // param base name
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
     * Operation votingGetProposalsCount
     *
     * Get proposals count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function votingGetProposalsCount(string $contentType = self::contentTypes['votingGetProposalsCount'][0])
    {
        list($response) = $this->votingGetProposalsCountWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation votingGetProposalsCountWithHttpInfo
     *
     * Get proposals count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function votingGetProposalsCountWithHttpInfo(string $contentType = self::contentTypes['votingGetProposalsCount'][0])
    {
        $request = $this->votingGetProposalsCountRequest($contentType);

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
     * Operation votingGetProposalsCountAsync
     *
     * Get proposals count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalsCountAsync(string $contentType = self::contentTypes['votingGetProposalsCount'][0])
    {
        return $this->votingGetProposalsCountAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation votingGetProposalsCountAsyncWithHttpInfo
     *
     * Get proposals count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function votingGetProposalsCountAsyncWithHttpInfo(string $contentType = self::contentTypes['votingGetProposalsCount'][0])
    {
        $returnType = 'int';
        $request = $this->votingGetProposalsCountRequest($contentType);

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
     * Create request for operation 'votingGetProposalsCount'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['votingGetProposalsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function votingGetProposalsCountRequest(string $contentType = self::contentTypes['votingGetProposalsCount'][0])
    {


        $resourcePath = '/v1/voting/proposals/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
