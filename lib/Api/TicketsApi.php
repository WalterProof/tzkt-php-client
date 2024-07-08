<?php
/**
 * TicketsApi
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
 * TicketsApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TicketsApi
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
        'ticketsGetHistoricalTicketBalances' => [
            'application/json',
        ],
        'ticketsGetTicketBalances' => [
            'application/json',
        ],
        'ticketsGetTicketBalancesCount' => [
            'application/json',
        ],
        'ticketsGetTicketTransfers' => [
            'application/json',
        ],
        'ticketsGetTicketTransfersCount' => [
            'application/json',
        ],
        'ticketsGetTickets' => [
            'application/json',
        ],
        'ticketsGetTicketsCount' => [
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
     * Operation ticketsGetHistoricalTicketBalances
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TicketBalanceShort[]
     */
    public function ticketsGetHistoricalTicketBalances($level, $id = null, $ticket_id = null, $ticket_ticketer = null, $account = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0])
    {
        list($response) = $this->ticketsGetHistoricalTicketBalancesWithHttpInfo($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesWithHttpInfo
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TicketBalanceShort[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetHistoricalTicketBalancesWithHttpInfo($level, $id = null, $ticket_id = null, $ticket_ticketer = null, $account = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0])
    {
        $request = $this->ticketsGetHistoricalTicketBalancesRequest($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TicketBalanceShort[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TicketBalanceShort[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TicketBalanceShort[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TicketBalanceShort[]';
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
                        '\Bzzhh\Tzkt\Model\TicketBalanceShort[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesAsync
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetHistoricalTicketBalancesAsync($level, $id = null, $ticket_id = null, $ticket_ticketer = null, $account = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0])
    {
        return $this->ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo
     *
     * Get historical ticket balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetHistoricalTicketBalancesAsyncWithHttpInfo($level, $id = null, $ticket_id = null, $ticket_ticketer = null, $account = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TicketBalanceShort[]';
        $request = $this->ticketsGetHistoricalTicketBalancesRequest($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetHistoricalTicketBalances'
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetHistoricalTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetHistoricalTicketBalancesRequest($level, $id = null, $ticket_id = null, $ticket_ticketer = null, $account = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetHistoricalTicketBalances'][0])
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling ticketsGetHistoricalTicketBalances'
            );
        }








        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetHistoricalTicketBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetHistoricalTicketBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/historical_balances/{level}';
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
            $ticket_id,
            'ticket.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            'OneOfNatParameter', // openApiType
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
     * Operation ticketsGetTicketBalances
     *
     * Get ticket balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TicketBalance[]
     */
    public function ticketsGetTicketBalances($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketBalances'][0])
    {
        list($response) = $this->ticketsGetTicketBalancesWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketBalancesWithHttpInfo
     *
     * Get ticket balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TicketBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketBalancesWithHttpInfo($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketBalances'][0])
    {
        $request = $this->ticketsGetTicketBalancesRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TicketBalance[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TicketBalance[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TicketBalance[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TicketBalance[]';
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
                        '\Bzzhh\Tzkt\Model\TicketBalance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketBalancesAsync
     *
     * Get ticket balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketBalancesAsync($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketBalances'][0])
    {
        return $this->ticketsGetTicketBalancesAsyncWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketBalancesAsyncWithHttpInfo
     *
     * Get ticket balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketBalancesAsyncWithHttpInfo($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketBalances'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TicketBalance[]';
        $request = $this->ticketsGetTicketBalancesRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTicketBalances'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketBalancesRequest($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketBalances'][0])
    {


















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/balances';
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
            $ticket_id,
            'ticket.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfers_count,
            'transfersCount', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $first_time,
            'firstTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
            $last_time,
            'lastTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
     * Operation ticketsGetTicketBalancesCount
     *
     * Get ticket balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketBalancesCount($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0])
    {
        list($response) = $this->ticketsGetTicketBalancesCountWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketBalancesCountWithHttpInfo
     *
     * Get ticket balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketBalancesCountWithHttpInfo($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0])
    {
        $request = $this->ticketsGetTicketBalancesCountRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation ticketsGetTicketBalancesCountAsync
     *
     * Get ticket balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketBalancesCountAsync($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0])
    {
        return $this->ticketsGetTicketBalancesCountAsyncWithHttpInfo($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketBalancesCountAsyncWithHttpInfo
     *
     * Get ticket balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketBalancesCountAsyncWithHttpInfo($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0])
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketBalancesCountRequest($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'ticketsGetTicketBalancesCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $transfers_count Filter by number of transfers.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketBalancesCountRequest($id = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $account = null, $balance = null, $transfers_count = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketBalancesCount'][0])
    {

















        $resourcePath = '/v1/tickets/balances/count';
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
            $ticket_id,
            'ticket.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfers_count,
            'transfersCount', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $first_time,
            'firstTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
            $last_time,
            'lastTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
     * Operation ticketsGetTicketTransfers
     *
     * Get ticket transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TicketTransfer[]
     */
    public function ticketsGetTicketTransfers($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0])
    {
        list($response) = $this->ticketsGetTicketTransfersWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketTransfersWithHttpInfo
     *
     * Get ticket transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TicketTransfer[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketTransfersWithHttpInfo($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0])
    {
        $request = $this->ticketsGetTicketTransfersRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TicketTransfer[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TicketTransfer[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TicketTransfer[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TicketTransfer[]';
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
                        '\Bzzhh\Tzkt\Model\TicketTransfer[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketTransfersAsync
     *
     * Get ticket transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketTransfersAsync($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0])
    {
        return $this->ticketsGetTicketTransfersAsyncWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketTransfersAsyncWithHttpInfo
     *
     * Get ticket transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketTransfersAsyncWithHttpInfo($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TicketTransfer[]';
        $request = $this->ticketsGetTicketTransfersRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTicketTransfers'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketTransfersRequest($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTicketTransfers'][0])
    {




















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketTransfers, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTicketTransfers, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets/transfers';
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
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_id,
            'ticket.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
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
            $from,
            'from', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transaction_id,
            'transactionId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfer_ticket_id,
            'transferTicketId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $smart_rollup_execute_id,
            'smartRollupExecuteId', // param base name
            'OneOfInt64NullParameter', // openApiType
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
     * Operation ticketsGetTicketTransfersCount
     *
     * Get ticket transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketTransfersCount($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0])
    {
        list($response) = $this->ticketsGetTicketTransfersCountWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketTransfersCountWithHttpInfo
     *
     * Get ticket transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketTransfersCountWithHttpInfo($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0])
    {
        $request = $this->ticketsGetTicketTransfersCountRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);

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
     * Operation ticketsGetTicketTransfersCountAsync
     *
     * Get ticket transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketTransfersCountAsync($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0])
    {
        return $this->ticketsGetTicketTransfersCountAsyncWithHttpInfo($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketTransfersCountAsyncWithHttpInfo
     *
     * Get ticket transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketTransfersCountAsyncWithHttpInfo($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0])
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketTransfersCountRequest($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $contentType);

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
     * Create request for operation 'ticketsGetTicketTransfersCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $ticket_id Filter by internal TzKT id. Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticket_ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $ticket_raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $ticket_content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $ticket_content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by recepient address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transfer_ticket_id Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $smart_rollup_execute_id Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketTransfersCountRequest($id = null, $level = null, $timestamp = null, $ticket_id = null, $ticket_ticketer = null, $ticket_raw_type = null, $ticket_raw_content = null, $ticket_content = null, $ticket_type_hash = null, $ticket_content_hash = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $transfer_ticket_id = null, $smart_rollup_execute_id = null, string $contentType = self::contentTypes['ticketsGetTicketTransfersCount'][0])
    {



















        $resourcePath = '/v1/tickets/transfers/count';
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
            'OneOfTimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_id,
            'ticket.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_ticketer,
            'ticket.ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_type,
            'ticket.rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_raw_content,
            'ticket.rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content,
            'ticket.content', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_type_hash,
            'ticket.typeHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticket_content_hash,
            'ticket.contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
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
            $from,
            'from', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transaction_id,
            'transactionId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $transfer_ticket_id,
            'transferTicketId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $smart_rollup_execute_id,
            'smartRollupExecuteId', // param base name
            'OneOfInt64NullParameter', // openApiType
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
     * Operation ticketsGetTickets
     *
     * Get tickets
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Ticket[]
     */
    public function ticketsGetTickets($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTickets'][0])
    {
        list($response) = $this->ticketsGetTicketsWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketsWithHttpInfo
     *
     * Get tickets
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Ticket[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketsWithHttpInfo($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTickets'][0])
    {
        $request = $this->ticketsGetTicketsRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Ticket[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Ticket[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Ticket[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Ticket[]';
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
                        '\Bzzhh\Tzkt\Model\Ticket[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ticketsGetTicketsAsync
     *
     * Get tickets
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketsAsync($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTickets'][0])
    {
        return $this->ticketsGetTicketsAsyncWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketsAsyncWithHttpInfo
     *
     * Get tickets
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketsAsyncWithHttpInfo($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTickets'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Ticket[]';
        $request = $this->ticketsGetTicketsRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'ticketsGetTickets'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTickets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketsRequest($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['ticketsGetTickets'][0])
    {















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTickets, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TicketsApi.ticketsGetTickets, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tickets';
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
            $ticketer,
            'ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_type,
            'rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_content,
            'rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content,
            'content', // param base name
            'OneOfJsonParameter', // openApiType
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
            $content_hash,
            'contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_minter,
            'firstMinter', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $first_time,
            'firstTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
            $last_time,
            'lastTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
     * Operation ticketsGetTicketsCount
     *
     * Get tickets count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function ticketsGetTicketsCount($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketsCount'][0])
    {
        list($response) = $this->ticketsGetTicketsCountWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation ticketsGetTicketsCountWithHttpInfo
     *
     * Get tickets count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function ticketsGetTicketsCountWithHttpInfo($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketsCount'][0])
    {
        $request = $this->ticketsGetTicketsCountRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation ticketsGetTicketsCountAsync
     *
     * Get tickets count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketsCountAsync($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketsCount'][0])
    {
        return $this->ticketsGetTicketsCountAsyncWithHttpInfo($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ticketsGetTicketsCountAsyncWithHttpInfo
     *
     * Get tickets count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ticketsGetTicketsCountAsyncWithHttpInfo($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketsCount'][0])
    {
        $returnType = 'int';
        $request = $this->ticketsGetTicketsCountRequest($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'ticketsGetTicketsCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $ticketer Filter by ticketer address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_type Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketsCountRawTypeParameter $raw_content Filter by ticket content in Micheline format.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $content Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $type_hash Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $content_hash Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ticketsGetTicketsCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ticketsGetTicketsCountRequest($id = null, $ticketer = null, $raw_type = null, $raw_content = null, $content = null, $type_hash = null, $content_hash = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, string $contentType = self::contentTypes['ticketsGetTicketsCount'][0])
    {














        $resourcePath = '/v1/tickets/count';
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
            $ticketer,
            'ticketer', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_type,
            'rawType', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $raw_content,
            'rawContent', // param base name
            'OneOfMichelineParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $content,
            'content', // param base name
            'OneOfJsonParameter', // openApiType
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
            $content_hash,
            'contentHash', // param base name
            'OneOfInt32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_minter,
            'firstMinter', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $first_time,
            'firstTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
            $last_time,
            'lastTime', // param base name
            'OneOfTimestampParameter', // openApiType
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
