<?php
/**
 * BlocksApi
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
 * BlocksApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BlocksApi
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
        'blocksGet' => [
            'application/json',
        ],
        'blocksGetByDate' => [
            'application/json',
        ],
        'blocksGetByDate2' => [
            'application/json',
        ],
        'blocksGetByHash' => [
            'application/json',
        ],
        'blocksGetByLevel' => [
            'application/json',
        ],
        'blocksGetByLevel2' => [
            'application/json',
        ],
        'blocksGetCount' => [
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
     * Operation blocksGet
     *
     * Get blocks
     *
     * @param  AccountsGetDelegateParameter $baker [DEPRECATED] (optional)
     * @param  BlocksGetAnyofParameter $anyof Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. (optional)
     * @param  AccountsGetDelegateParameter $proposer Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetDelegateParameter $producer Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetIdParameter $level Filters blocks by level. (optional)
     * @param  AccountsGetOperationsTimestampParameter $timestamp Filters blocks by timestamp. (optional)
     * @param  AccountsGetIdParameter $priority [DEPRECATED] (optional)
     * @param  AccountsGetIdParameter $block_round Filters blocks by block round. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGet'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Block[]
     */
    public function blocksGet($baker = null, $anyof = null, $proposer = null, $producer = null, $level = null, $timestamp = null, $priority = null, $block_round = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['blocksGet'][0])
    {
        list($response) = $this->blocksGetWithHttpInfo($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetWithHttpInfo
     *
     * Get blocks
     *
     * @param  AccountsGetDelegateParameter $baker [DEPRECATED] (optional)
     * @param  BlocksGetAnyofParameter $anyof Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. (optional)
     * @param  AccountsGetDelegateParameter $proposer Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetDelegateParameter $producer Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetIdParameter $level Filters blocks by level. (optional)
     * @param  AccountsGetOperationsTimestampParameter $timestamp Filters blocks by timestamp. (optional)
     * @param  AccountsGetIdParameter $priority [DEPRECATED] (optional)
     * @param  AccountsGetIdParameter $block_round Filters blocks by block round. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGet'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Block[], HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetWithHttpInfo($baker = null, $anyof = null, $proposer = null, $producer = null, $level = null, $timestamp = null, $priority = null, $block_round = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['blocksGet'][0])
    {
        $request = $this->blocksGetRequest($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Block[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Block[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Block[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Block[]';
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
                        '\Bzzhh\Tzkt\Model\Block[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blocksGetAsync
     *
     * Get blocks
     *
     * @param  AccountsGetDelegateParameter $baker [DEPRECATED] (optional)
     * @param  BlocksGetAnyofParameter $anyof Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. (optional)
     * @param  AccountsGetDelegateParameter $proposer Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetDelegateParameter $producer Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetIdParameter $level Filters blocks by level. (optional)
     * @param  AccountsGetOperationsTimestampParameter $timestamp Filters blocks by timestamp. (optional)
     * @param  AccountsGetIdParameter $priority [DEPRECATED] (optional)
     * @param  AccountsGetIdParameter $block_round Filters blocks by block round. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetAsync($baker = null, $anyof = null, $proposer = null, $producer = null, $level = null, $timestamp = null, $priority = null, $block_round = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['blocksGet'][0])
    {
        return $this->blocksGetAsyncWithHttpInfo($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetAsyncWithHttpInfo
     *
     * Get blocks
     *
     * @param  AccountsGetDelegateParameter $baker [DEPRECATED] (optional)
     * @param  BlocksGetAnyofParameter $anyof Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. (optional)
     * @param  AccountsGetDelegateParameter $proposer Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetDelegateParameter $producer Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetIdParameter $level Filters blocks by level. (optional)
     * @param  AccountsGetOperationsTimestampParameter $timestamp Filters blocks by timestamp. (optional)
     * @param  AccountsGetIdParameter $priority [DEPRECATED] (optional)
     * @param  AccountsGetIdParameter $block_round Filters blocks by block round. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetAsyncWithHttpInfo($baker = null, $anyof = null, $proposer = null, $producer = null, $level = null, $timestamp = null, $priority = null, $block_round = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['blocksGet'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Block[]';
        $request = $this->blocksGetRequest($baker, $anyof, $proposer, $producer, $level, $timestamp, $priority, $block_round, $select, $sort, $offset, $limit, $quote, $contentType);

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
     * Create request for operation 'blocksGet'
     *
     * @param  AccountsGetDelegateParameter $baker [DEPRECATED] (optional)
     * @param  BlocksGetAnyofParameter $anyof Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. (optional)
     * @param  AccountsGetDelegateParameter $proposer Filters blocks by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetDelegateParameter $producer Filters blocks by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. (optional)
     * @param  AccountsGetIdParameter $level Filters blocks by level. (optional)
     * @param  AccountsGetOperationsTimestampParameter $timestamp Filters blocks by timestamp. (optional)
     * @param  AccountsGetIdParameter $priority [DEPRECATED] (optional)
     * @param  AccountsGetIdParameter $block_round Filters blocks by block round. (optional)
     * @param  AccountsGetSelectParameter $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  AccountsGetSortParameter $sort Sorts blocks by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;payloadRound&#x60;, &#x60;blockRound&#x60;, &#x60;validations&#x60;, &#x60;reward&#x60;, &#x60;bonus&#x60;, &#x60;fees&#x60;. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped (optional)
     * @param  int $limit Maximum number of items to return (optional, default to 100)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetRequest($baker = null, $anyof = null, $proposer = null, $producer = null, $level = null, $timestamp = null, $priority = null, $block_round = null, $select = null, $sort = null, $offset = null, $limit = 100, $quote = null, string $contentType = self::contentTypes['blocksGet'][0])
    {












        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BlocksApi.blocksGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BlocksApi.blocksGet, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $baker,
            'baker', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $anyof,
            'anyof', // param base name
            'OneOfAnyOfParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $proposer,
            'proposer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $producer,
            'producer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            'OneOfDateTimeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $priority,
            'priority', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $block_round,
            'blockRound', // param base name
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
     * Operation blocksGetByDate
     *
     * Get block by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Block
     */
    public function blocksGetByDate($timestamp, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByDate'][0])
    {
        list($response) = $this->blocksGetByDateWithHttpInfo($timestamp, $operations, $micheline, $quote, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetByDateWithHttpInfo
     *
     * Get block by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Block, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetByDateWithHttpInfo($timestamp, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByDate'][0])
    {
        $request = $this->blocksGetByDateRequest($timestamp, $operations, $micheline, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Block' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Block' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Block', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Block';
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
                        '\Bzzhh\Tzkt\Model\Block',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blocksGetByDateAsync
     *
     * Get block by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByDateAsync($timestamp, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByDate'][0])
    {
        return $this->blocksGetByDateAsyncWithHttpInfo($timestamp, $operations, $micheline, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetByDateAsyncWithHttpInfo
     *
     * Get block by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByDateAsyncWithHttpInfo($timestamp, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByDate'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Block';
        $request = $this->blocksGetByDateRequest($timestamp, $operations, $micheline, $quote, $contentType);

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
     * Create request for operation 'blocksGetByDate'
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetByDateRequest($timestamp, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByDate'][0])
    {

        // verify the required parameter 'timestamp' is set
        if ($timestamp === null || (is_array($timestamp) && count($timestamp) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timestamp when calling blocksGetByDate'
            );
        }





        $resourcePath = '/v1/blocks/{timestamp}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $operations,
            'operations', // param base name
            'boolean', // openApiType
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
        if ($timestamp !== null) {
            $resourcePath = str_replace(
                '{' . 'timestamp' . '}',
                ObjectSerializer::toPathValue($timestamp),
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
     * Operation blocksGetByDate2
     *
     * Get level by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function blocksGetByDate2($timestamp, string $contentType = self::contentTypes['blocksGetByDate2'][0])
    {
        list($response) = $this->blocksGetByDate2WithHttpInfo($timestamp, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetByDate2WithHttpInfo
     *
     * Get level by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetByDate2WithHttpInfo($timestamp, string $contentType = self::contentTypes['blocksGetByDate2'][0])
    {
        $request = $this->blocksGetByDate2Request($timestamp, $contentType);

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
     * Operation blocksGetByDate2Async
     *
     * Get level by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByDate2Async($timestamp, string $contentType = self::contentTypes['blocksGetByDate2'][0])
    {
        return $this->blocksGetByDate2AsyncWithHttpInfo($timestamp, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetByDate2AsyncWithHttpInfo
     *
     * Get level by timestamp
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByDate2AsyncWithHttpInfo($timestamp, string $contentType = self::contentTypes['blocksGetByDate2'][0])
    {
        $returnType = 'int';
        $request = $this->blocksGetByDate2Request($timestamp, $contentType);

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
     * Create request for operation 'blocksGetByDate2'
     *
     * @param  \DateTime $timestamp Timestamp, e.g. &#x60;2020-01-01T00:00:00Z&#x60; (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByDate2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetByDate2Request($timestamp, string $contentType = self::contentTypes['blocksGetByDate2'][0])
    {

        // verify the required parameter 'timestamp' is set
        if ($timestamp === null || (is_array($timestamp) && count($timestamp) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timestamp when calling blocksGetByDate2'
            );
        }


        $resourcePath = '/v1/blocks/{timestamp}/level';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($timestamp !== null) {
            $resourcePath = str_replace(
                '{' . 'timestamp' . '}',
                ObjectSerializer::toPathValue($timestamp),
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
     * Operation blocksGetByHash
     *
     * Get block by hash
     *
     * @param  string $hash Block hash (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByHash'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Block
     */
    public function blocksGetByHash($hash, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByHash'][0])
    {
        list($response) = $this->blocksGetByHashWithHttpInfo($hash, $operations, $micheline, $quote, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetByHashWithHttpInfo
     *
     * Get block by hash
     *
     * @param  string $hash Block hash (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByHash'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Block, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetByHashWithHttpInfo($hash, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByHash'][0])
    {
        $request = $this->blocksGetByHashRequest($hash, $operations, $micheline, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Block' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Block' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Block', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Block';
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
                        '\Bzzhh\Tzkt\Model\Block',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blocksGetByHashAsync
     *
     * Get block by hash
     *
     * @param  string $hash Block hash (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByHashAsync($hash, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByHash'][0])
    {
        return $this->blocksGetByHashAsyncWithHttpInfo($hash, $operations, $micheline, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetByHashAsyncWithHttpInfo
     *
     * Get block by hash
     *
     * @param  string $hash Block hash (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByHashAsyncWithHttpInfo($hash, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByHash'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Block';
        $request = $this->blocksGetByHashRequest($hash, $operations, $micheline, $quote, $contentType);

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
     * Create request for operation 'blocksGetByHash'
     *
     * @param  string $hash Block hash (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByHash'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetByHashRequest($hash, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByHash'][0])
    {

        // verify the required parameter 'hash' is set
        if ($hash === null || (is_array($hash) && count($hash) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hash when calling blocksGetByHash'
            );
        }





        $resourcePath = '/v1/blocks/{hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $operations,
            'operations', // param base name
            'boolean', // openApiType
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
     * Operation blocksGetByLevel
     *
     * Get block by level
     *
     * @param  int $level Block level (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Block
     */
    public function blocksGetByLevel($level, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByLevel'][0])
    {
        list($response) = $this->blocksGetByLevelWithHttpInfo($level, $operations, $micheline, $quote, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetByLevelWithHttpInfo
     *
     * Get block by level
     *
     * @param  int $level Block level (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Block, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetByLevelWithHttpInfo($level, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByLevel'][0])
    {
        $request = $this->blocksGetByLevelRequest($level, $operations, $micheline, $quote, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Block' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Block' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Block', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Block';
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
                        '\Bzzhh\Tzkt\Model\Block',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blocksGetByLevelAsync
     *
     * Get block by level
     *
     * @param  int $level Block level (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByLevelAsync($level, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByLevel'][0])
    {
        return $this->blocksGetByLevelAsyncWithHttpInfo($level, $operations, $micheline, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetByLevelAsyncWithHttpInfo
     *
     * Get block by level
     *
     * @param  int $level Block level (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByLevelAsyncWithHttpInfo($level, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByLevel'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Block';
        $request = $this->blocksGetByLevelRequest($level, $operations, $micheline, $quote, $contentType);

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
     * Create request for operation 'blocksGetByLevel'
     *
     * @param  int $level Block level (required)
     * @param  bool $operations Flag indicating whether to include block operations into returned object or not (optional, default to false)
     * @param  AccountsGetOperationsMichelineParameter $micheline Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  AccountsGetOperationsQuoteParameter $quote Comma-separated list of ticker symbols to inject historical prices into response (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetByLevelRequest($level, $operations = false, $micheline = null, $quote = null, string $contentType = self::contentTypes['blocksGetByLevel'][0])
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling blocksGetByLevel'
            );
        }





        $resourcePath = '/v1/blocks/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $operations,
            'operations', // param base name
            'boolean', // openApiType
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
     * Operation blocksGetByLevel2
     *
     * Get timestamp by level
     *
     * @param  int $level Block level (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DateTime
     */
    public function blocksGetByLevel2($level, string $contentType = self::contentTypes['blocksGetByLevel2'][0])
    {
        list($response) = $this->blocksGetByLevel2WithHttpInfo($level, $contentType);
        return $response;
    }

    /**
     * Operation blocksGetByLevel2WithHttpInfo
     *
     * Get timestamp by level
     *
     * @param  int $level Block level (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DateTime, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetByLevel2WithHttpInfo($level, string $contentType = self::contentTypes['blocksGetByLevel2'][0])
    {
        $request = $this->blocksGetByLevel2Request($level, $contentType);

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
                    if ('\DateTime' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\DateTime' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DateTime', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DateTime';
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
                        '\DateTime',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blocksGetByLevel2Async
     *
     * Get timestamp by level
     *
     * @param  int $level Block level (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByLevel2Async($level, string $contentType = self::contentTypes['blocksGetByLevel2'][0])
    {
        return $this->blocksGetByLevel2AsyncWithHttpInfo($level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetByLevel2AsyncWithHttpInfo
     *
     * Get timestamp by level
     *
     * @param  int $level Block level (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetByLevel2AsyncWithHttpInfo($level, string $contentType = self::contentTypes['blocksGetByLevel2'][0])
    {
        $returnType = '\DateTime';
        $request = $this->blocksGetByLevel2Request($level, $contentType);

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
     * Create request for operation 'blocksGetByLevel2'
     *
     * @param  int $level Block level (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetByLevel2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetByLevel2Request($level, string $contentType = self::contentTypes['blocksGetByLevel2'][0])
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling blocksGetByLevel2'
            );
        }


        $resourcePath = '/v1/blocks/{level}/timestamp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation blocksGetCount
     *
     * Get blocks count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function blocksGetCount(string $contentType = self::contentTypes['blocksGetCount'][0])
    {
        list($response) = $this->blocksGetCountWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation blocksGetCountWithHttpInfo
     *
     * Get blocks count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function blocksGetCountWithHttpInfo(string $contentType = self::contentTypes['blocksGetCount'][0])
    {
        $request = $this->blocksGetCountRequest($contentType);

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
     * Operation blocksGetCountAsync
     *
     * Get blocks count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetCountAsync(string $contentType = self::contentTypes['blocksGetCount'][0])
    {
        return $this->blocksGetCountAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blocksGetCountAsyncWithHttpInfo
     *
     * Get blocks count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blocksGetCountAsyncWithHttpInfo(string $contentType = self::contentTypes['blocksGetCount'][0])
    {
        $returnType = 'int';
        $request = $this->blocksGetCountRequest($contentType);

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
     * Create request for operation 'blocksGetCount'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blocksGetCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blocksGetCountRequest(string $contentType = self::contentTypes['blocksGetCount'][0])
    {


        $resourcePath = '/v1/blocks/count';
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
