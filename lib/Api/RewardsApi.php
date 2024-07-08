<?php
/**
 * RewardsApi
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
 * RewardsApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RewardsApi
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
        'rewardsGetBakerRewards' => [
            'application/json',
        ],
        'rewardsGetBakerRewardsCount' => [
            'application/json',
        ],
        'rewardsGetDelegatorRewards' => [
            'application/json',
        ],
        'rewardsGetDelegatorRewardsCount' => [
            'application/json',
        ],
        'rewardsGetRewardSplit' => [
            'application/json',
        ],
        'rewardsGetRewardSplitDelegator' => [
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
     * Operation rewardsGetBakerRewards
     *
     * Get baker cycle rewards
     *
     * @param  string $address Baker address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewards'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\BakerRewards[]
     */
    public function rewardsGetBakerRewards($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetBakerRewards'][0])
    {
        list($response) = $this->rewardsGetBakerRewardsWithHttpInfo($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetBakerRewardsWithHttpInfo
     *
     * Get baker cycle rewards
     *
     * @param  string $address Baker address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewards'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\BakerRewards[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetBakerRewardsWithHttpInfo($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetBakerRewards'][0])
    {
        $request = $this->rewardsGetBakerRewardsRequest($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\BakerRewards[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\BakerRewards[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\BakerRewards[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\BakerRewards[]';
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
                        '\Bzzhh\Tzkt\Model\BakerRewards[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rewardsGetBakerRewardsAsync
     *
     * Get baker cycle rewards
     *
     * @param  string $address Baker address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetBakerRewardsAsync($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetBakerRewards'][0])
    {
        return $this->rewardsGetBakerRewardsAsyncWithHttpInfo($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetBakerRewardsAsyncWithHttpInfo
     *
     * Get baker cycle rewards
     *
     * @param  string $address Baker address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetBakerRewardsAsyncWithHttpInfo($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetBakerRewards'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\BakerRewards[]';
        $request = $this->rewardsGetBakerRewardsRequest($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);

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
     * Create request for operation 'rewardsGetBakerRewards'
     *
     * @param  string $address Baker address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetBakerRewardsRequest($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetBakerRewards'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling rewardsGetBakerRewards'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetBakerRewards, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetBakerRewards, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/rewards/bakers/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
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
            $quote,
            'quote', // param base name
            'OneOfSymbols', // openApiType
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
     * Operation rewardsGetBakerRewardsCount
     *
     * Get baker cycle rewards count
     *
     * @param  string $address Baker address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewardsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function rewardsGetBakerRewardsCount($address, string $contentType = self::contentTypes['rewardsGetBakerRewardsCount'][0])
    {
        list($response) = $this->rewardsGetBakerRewardsCountWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetBakerRewardsCountWithHttpInfo
     *
     * Get baker cycle rewards count
     *
     * @param  string $address Baker address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewardsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetBakerRewardsCountWithHttpInfo($address, string $contentType = self::contentTypes['rewardsGetBakerRewardsCount'][0])
    {
        $request = $this->rewardsGetBakerRewardsCountRequest($address, $contentType);

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
     * Operation rewardsGetBakerRewardsCountAsync
     *
     * Get baker cycle rewards count
     *
     * @param  string $address Baker address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetBakerRewardsCountAsync($address, string $contentType = self::contentTypes['rewardsGetBakerRewardsCount'][0])
    {
        return $this->rewardsGetBakerRewardsCountAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetBakerRewardsCountAsyncWithHttpInfo
     *
     * Get baker cycle rewards count
     *
     * @param  string $address Baker address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetBakerRewardsCountAsyncWithHttpInfo($address, string $contentType = self::contentTypes['rewardsGetBakerRewardsCount'][0])
    {
        $returnType = 'int';
        $request = $this->rewardsGetBakerRewardsCountRequest($address, $contentType);

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
     * Create request for operation 'rewardsGetBakerRewardsCount'
     *
     * @param  string $address Baker address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetBakerRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetBakerRewardsCountRequest($address, string $contentType = self::contentTypes['rewardsGetBakerRewardsCount'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling rewardsGetBakerRewardsCount'
            );
        }


        $resourcePath = '/v1/rewards/bakers/{address}/count';
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
     * Operation rewardsGetDelegatorRewards
     *
     * Get delegator cycle rewards
     *
     * @param  string $address Delegator address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewards'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\DelegatorRewards[]
     */
    public function rewardsGetDelegatorRewards($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetDelegatorRewards'][0])
    {
        list($response) = $this->rewardsGetDelegatorRewardsWithHttpInfo($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetDelegatorRewardsWithHttpInfo
     *
     * Get delegator cycle rewards
     *
     * @param  string $address Delegator address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewards'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\DelegatorRewards[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetDelegatorRewardsWithHttpInfo($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetDelegatorRewards'][0])
    {
        $request = $this->rewardsGetDelegatorRewardsRequest($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\DelegatorRewards[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\DelegatorRewards[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\DelegatorRewards[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\DelegatorRewards[]';
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
                        '\Bzzhh\Tzkt\Model\DelegatorRewards[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rewardsGetDelegatorRewardsAsync
     *
     * Get delegator cycle rewards
     *
     * @param  string $address Delegator address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetDelegatorRewardsAsync($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetDelegatorRewards'][0])
    {
        return $this->rewardsGetDelegatorRewardsAsyncWithHttpInfo($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetDelegatorRewardsAsyncWithHttpInfo
     *
     * Get delegator cycle rewards
     *
     * @param  string $address Delegator address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetDelegatorRewardsAsyncWithHttpInfo($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetDelegatorRewards'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\DelegatorRewards[]';
        $request = $this->rewardsGetDelegatorRewardsRequest($address, $cycle, $select, $sort, $offset, $limit, $quote, $contentType);

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
     * Create request for operation 'rewardsGetDelegatorRewards'
     *
     * @param  string $address Delegator address. (required)
     * @param  AccountsGetIdParameter $cycle Filters rewards by cycle. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts cycle rewards by specified field. Supported fields: &#x60;cycle&#x60; (default, desc). (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetDelegatorRewardsRequest($address, $cycle = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['rewardsGetDelegatorRewards'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling rewardsGetDelegatorRewards'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetDelegatorRewards, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetDelegatorRewards, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/rewards/delegators/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cycle,
            'cycle', // param base name
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
            $quote,
            'quote', // param base name
            'OneOfSymbols', // openApiType
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
     * Operation rewardsGetDelegatorRewardsCount
     *
     * Get delegator cycle rewards count
     *
     * @param  string $address Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewardsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function rewardsGetDelegatorRewardsCount($address, string $contentType = self::contentTypes['rewardsGetDelegatorRewardsCount'][0])
    {
        list($response) = $this->rewardsGetDelegatorRewardsCountWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetDelegatorRewardsCountWithHttpInfo
     *
     * Get delegator cycle rewards count
     *
     * @param  string $address Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewardsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetDelegatorRewardsCountWithHttpInfo($address, string $contentType = self::contentTypes['rewardsGetDelegatorRewardsCount'][0])
    {
        $request = $this->rewardsGetDelegatorRewardsCountRequest($address, $contentType);

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
     * Operation rewardsGetDelegatorRewardsCountAsync
     *
     * Get delegator cycle rewards count
     *
     * @param  string $address Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetDelegatorRewardsCountAsync($address, string $contentType = self::contentTypes['rewardsGetDelegatorRewardsCount'][0])
    {
        return $this->rewardsGetDelegatorRewardsCountAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetDelegatorRewardsCountAsyncWithHttpInfo
     *
     * Get delegator cycle rewards count
     *
     * @param  string $address Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetDelegatorRewardsCountAsyncWithHttpInfo($address, string $contentType = self::contentTypes['rewardsGetDelegatorRewardsCount'][0])
    {
        $returnType = 'int';
        $request = $this->rewardsGetDelegatorRewardsCountRequest($address, $contentType);

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
     * Create request for operation 'rewardsGetDelegatorRewardsCount'
     *
     * @param  string $address Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetDelegatorRewardsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetDelegatorRewardsCountRequest($address, string $contentType = self::contentTypes['rewardsGetDelegatorRewardsCount'][0])
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling rewardsGetDelegatorRewardsCount'
            );
        }


        $resourcePath = '/v1/rewards/delegators/{address}/count';
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
     * Operation rewardsGetRewardSplit
     *
     * Get reward split
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Rewards cycle (required)
     * @param  int $offset Specifies how many delegators in the reward split should be skipped (optional, default to 0)
     * @param  int $limit Maximum number of delegators to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplit'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\RewardSplit
     */
    public function rewardsGetRewardSplit($baker, $cycle, $offset = 0, $limit = 100, string $contentType = self::contentTypes['rewardsGetRewardSplit'][0])
    {
        list($response) = $this->rewardsGetRewardSplitWithHttpInfo($baker, $cycle, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetRewardSplitWithHttpInfo
     *
     * Get reward split
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Rewards cycle (required)
     * @param  int $offset Specifies how many delegators in the reward split should be skipped (optional, default to 0)
     * @param  int $limit Maximum number of delegators to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplit'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\RewardSplit, HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetRewardSplitWithHttpInfo($baker, $cycle, $offset = 0, $limit = 100, string $contentType = self::contentTypes['rewardsGetRewardSplit'][0])
    {
        $request = $this->rewardsGetRewardSplitRequest($baker, $cycle, $offset, $limit, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\RewardSplit' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\RewardSplit' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\RewardSplit', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\RewardSplit';
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
                        '\Bzzhh\Tzkt\Model\RewardSplit',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rewardsGetRewardSplitAsync
     *
     * Get reward split
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Rewards cycle (required)
     * @param  int $offset Specifies how many delegators in the reward split should be skipped (optional, default to 0)
     * @param  int $limit Maximum number of delegators to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetRewardSplitAsync($baker, $cycle, $offset = 0, $limit = 100, string $contentType = self::contentTypes['rewardsGetRewardSplit'][0])
    {
        return $this->rewardsGetRewardSplitAsyncWithHttpInfo($baker, $cycle, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetRewardSplitAsyncWithHttpInfo
     *
     * Get reward split
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Rewards cycle (required)
     * @param  int $offset Specifies how many delegators in the reward split should be skipped (optional, default to 0)
     * @param  int $limit Maximum number of delegators to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetRewardSplitAsyncWithHttpInfo($baker, $cycle, $offset = 0, $limit = 100, string $contentType = self::contentTypes['rewardsGetRewardSplit'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\RewardSplit';
        $request = $this->rewardsGetRewardSplitRequest($baker, $cycle, $offset, $limit, $contentType);

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
     * Create request for operation 'rewardsGetRewardSplit'
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Rewards cycle (required)
     * @param  int $offset Specifies how many delegators in the reward split should be skipped (optional, default to 0)
     * @param  int $limit Maximum number of delegators to return (optional, default to 100)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetRewardSplitRequest($baker, $cycle, $offset = 0, $limit = 100, string $contentType = self::contentTypes['rewardsGetRewardSplit'][0])
    {

        // verify the required parameter 'baker' is set
        if ($baker === null || (is_array($baker) && count($baker) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $baker when calling rewardsGetRewardSplit'
            );
        }

        // verify the required parameter 'cycle' is set
        if ($cycle === null || (is_array($cycle) && count($cycle) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cycle when calling rewardsGetRewardSplit'
            );
        }


        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetRewardSplit, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling RewardsApi.rewardsGetRewardSplit, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/rewards/split/{baker}/{cycle}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
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
        if ($baker !== null) {
            $resourcePath = str_replace(
                '{' . 'baker' . '}',
                ObjectSerializer::toPathValue($baker),
                $resourcePath
            );
        }
        // path params
        if ($cycle !== null) {
            $resourcePath = str_replace(
                '{' . 'cycle' . '}',
                ObjectSerializer::toPathValue($cycle),
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
     * Operation rewardsGetRewardSplitDelegator
     *
     * Get reward split delegator
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Reward split cycle (required)
     * @param  string $delegator Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplitDelegator'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\SplitDelegator
     */
    public function rewardsGetRewardSplitDelegator($baker, $cycle, $delegator, string $contentType = self::contentTypes['rewardsGetRewardSplitDelegator'][0])
    {
        list($response) = $this->rewardsGetRewardSplitDelegatorWithHttpInfo($baker, $cycle, $delegator, $contentType);
        return $response;
    }

    /**
     * Operation rewardsGetRewardSplitDelegatorWithHttpInfo
     *
     * Get reward split delegator
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Reward split cycle (required)
     * @param  string $delegator Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplitDelegator'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\SplitDelegator, HTTP status code, HTTP response headers (array of strings)
     */
    public function rewardsGetRewardSplitDelegatorWithHttpInfo($baker, $cycle, $delegator, string $contentType = self::contentTypes['rewardsGetRewardSplitDelegator'][0])
    {
        $request = $this->rewardsGetRewardSplitDelegatorRequest($baker, $cycle, $delegator, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\SplitDelegator' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\SplitDelegator' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\SplitDelegator', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\SplitDelegator';
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
                        '\Bzzhh\Tzkt\Model\SplitDelegator',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rewardsGetRewardSplitDelegatorAsync
     *
     * Get reward split delegator
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Reward split cycle (required)
     * @param  string $delegator Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplitDelegator'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetRewardSplitDelegatorAsync($baker, $cycle, $delegator, string $contentType = self::contentTypes['rewardsGetRewardSplitDelegator'][0])
    {
        return $this->rewardsGetRewardSplitDelegatorAsyncWithHttpInfo($baker, $cycle, $delegator, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rewardsGetRewardSplitDelegatorAsyncWithHttpInfo
     *
     * Get reward split delegator
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Reward split cycle (required)
     * @param  string $delegator Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplitDelegator'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rewardsGetRewardSplitDelegatorAsyncWithHttpInfo($baker, $cycle, $delegator, string $contentType = self::contentTypes['rewardsGetRewardSplitDelegator'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\SplitDelegator';
        $request = $this->rewardsGetRewardSplitDelegatorRequest($baker, $cycle, $delegator, $contentType);

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
     * Create request for operation 'rewardsGetRewardSplitDelegator'
     *
     * @param  string $baker Baker address (required)
     * @param  int $cycle Reward split cycle (required)
     * @param  string $delegator Delegator address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rewardsGetRewardSplitDelegator'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rewardsGetRewardSplitDelegatorRequest($baker, $cycle, $delegator, string $contentType = self::contentTypes['rewardsGetRewardSplitDelegator'][0])
    {

        // verify the required parameter 'baker' is set
        if ($baker === null || (is_array($baker) && count($baker) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $baker when calling rewardsGetRewardSplitDelegator'
            );
        }

        // verify the required parameter 'cycle' is set
        if ($cycle === null || (is_array($cycle) && count($cycle) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cycle when calling rewardsGetRewardSplitDelegator'
            );
        }

        // verify the required parameter 'delegator' is set
        if ($delegator === null || (is_array($delegator) && count($delegator) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $delegator when calling rewardsGetRewardSplitDelegator'
            );
        }


        $resourcePath = '/v1/rewards/split/{baker}/{cycle}/{delegator}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($baker !== null) {
            $resourcePath = str_replace(
                '{' . 'baker' . '}',
                ObjectSerializer::toPathValue($baker),
                $resourcePath
            );
        }
        // path params
        if ($cycle !== null) {
            $resourcePath = str_replace(
                '{' . 'cycle' . '}',
                ObjectSerializer::toPathValue($cycle),
                $resourcePath
            );
        }
        // path params
        if ($delegator !== null) {
            $resourcePath = str_replace(
                '{' . 'delegator' . '}',
                ObjectSerializer::toPathValue($delegator),
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
