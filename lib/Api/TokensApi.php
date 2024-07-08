<?php
/**
 * TokensApi
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
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokensApi
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
        'tokensGetTokenBalances' => [
            'application/json',
        ],
        'tokensGetTokenBalances2' => [
            'application/json',
        ],
        'tokensGetTokenBalancesCount' => [
            'application/json',
        ],
        'tokensGetTokenTransfers' => [
            'application/json',
        ],
        'tokensGetTokenTransfersCount' => [
            'application/json',
        ],
        'tokensGetTokens' => [
            'application/json',
        ],
        'tokensGetTokensCount' => [
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
     * Operation tokensGetTokenBalances
     *
     * Get token balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TokenBalance[]
     */
    public function tokensGetTokenBalances($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances'][0])
    {
        list($response) = $this->tokensGetTokenBalancesWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalancesWithHttpInfo
     *
     * Get token balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TokenBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalancesWithHttpInfo($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances'][0])
    {
        $request = $this->tokensGetTokenBalancesRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TokenBalance[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TokenBalance[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TokenBalance[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TokenBalance[]';
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
                        '\Bzzhh\Tzkt\Model\TokenBalance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenBalancesAsync
     *
     * Get token balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalancesAsync($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances'][0])
    {
        return $this->tokensGetTokenBalancesAsyncWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalancesAsyncWithHttpInfo
     *
     * Get token balances
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalancesAsyncWithHttpInfo($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TokenBalance[]';
        $request = $this->tokensGetTokenBalancesRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenBalances'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalancesRequest($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances'][0])
    {
















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/balances';
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
            $account,
            'account', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'token.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            'OneOfJsonParameter', // openApiType
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
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
     * Operation tokensGetTokenBalances2
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TokenBalanceShort[]
     */
    public function tokensGetTokenBalances2($level, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances2'][0])
    {
        list($response) = $this->tokensGetTokenBalances2WithHttpInfo($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalances2WithHttpInfo
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TokenBalanceShort[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalances2WithHttpInfo($level, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances2'][0])
    {
        $request = $this->tokensGetTokenBalances2Request($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TokenBalanceShort[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TokenBalanceShort[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TokenBalanceShort[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TokenBalanceShort[]';
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
                        '\Bzzhh\Tzkt\Model\TokenBalanceShort[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenBalances2Async
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalances2Async($level, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances2'][0])
    {
        return $this->tokensGetTokenBalances2AsyncWithHttpInfo($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalances2AsyncWithHttpInfo
     *
     * Get historical token balances
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalances2AsyncWithHttpInfo($level, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances2'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TokenBalanceShort[]';
        $request = $this->tokensGetTokenBalances2Request($level, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenBalances2'
     *
     * @param  int $level Level of the block at the end of which historical balances must be calculated (required)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalances2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalances2Request($level, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenBalances2'][0])
    {

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $level when calling tokensGetTokenBalances2'
            );
        }










        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances2, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenBalances2, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/historical_balances/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $token_id,
            'token.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            'OneOfJsonParameter', // openApiType
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
     * Operation tokensGetTokenBalancesCount
     *
     * Get token balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function tokensGetTokenBalancesCount($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0])
    {
        list($response) = $this->tokensGetTokenBalancesCountWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenBalancesCountWithHttpInfo
     *
     * Get token balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenBalancesCountWithHttpInfo($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0])
    {
        $request = $this->tokensGetTokenBalancesCountRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);

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
     * Operation tokensGetTokenBalancesCountAsync
     *
     * Get token balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalancesCountAsync($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0])
    {
        return $this->tokensGetTokenBalancesCountAsyncWithHttpInfo($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenBalancesCountAsyncWithHttpInfo
     *
     * Get token balances count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenBalancesCountAsyncWithHttpInfo($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0])
    {
        $returnType = 'int';
        $request = $this->tokensGetTokenBalancesCountRequest($id, $account, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $balance, $first_level, $first_time, $last_level, $last_time, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokenBalancesCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $account Filter by account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the balance was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenBalancesCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenBalancesCountRequest($id = null, $account = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $balance = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenBalancesCount'][0])
    {















        $resourcePath = '/v1/tokens/balances/count';
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
            $account,
            'account', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'token.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            'OneOfJsonParameter', // openApiType
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
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
     * Operation tokensGetTokenTransfers
     *
     * Get token transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\TokenTransfer[]
     */
    public function tokensGetTokenTransfers($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenTransfers'][0])
    {
        list($response) = $this->tokensGetTokenTransfersWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenTransfersWithHttpInfo
     *
     * Get token transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\TokenTransfer[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenTransfersWithHttpInfo($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenTransfers'][0])
    {
        $request = $this->tokensGetTokenTransfersRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\TokenTransfer[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\TokenTransfer[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\TokenTransfer[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\TokenTransfer[]';
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
                        '\Bzzhh\Tzkt\Model\TokenTransfer[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokenTransfersAsync
     *
     * Get token transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenTransfersAsync($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenTransfers'][0])
    {
        return $this->tokensGetTokenTransfersAsyncWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenTransfersAsyncWithHttpInfo
     *
     * Get token transfers
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenTransfersAsyncWithHttpInfo($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenTransfers'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\TokenTransfer[]';
        $request = $this->tokensGetTokenTransfersRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokenTransfers'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenTransfersRequest($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokenTransfers'][0])
    {



















        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenTransfers, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokenTransfers, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens/transfers';
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
            $token_id,
            'token.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            'OneOfJsonParameter', // openApiType
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
            $origination_id,
            'originationId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $migration_id,
            'migrationId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
     * Operation tokensGetTokenTransfersCount
     *
     * Get token transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function tokensGetTokenTransfersCount($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0])
    {
        list($response) = $this->tokensGetTokenTransfersCountWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokenTransfersCountWithHttpInfo
     *
     * Get token transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokenTransfersCountWithHttpInfo($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0])
    {
        $request = $this->tokensGetTokenTransfersCountRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);

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
     * Operation tokensGetTokenTransfersCountAsync
     *
     * Get token transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenTransfersCountAsync($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0])
    {
        return $this->tokensGetTokenTransfersCountAsyncWithHttpInfo($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokenTransfersCountAsyncWithHttpInfo
     *
     * Get token transfers count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokenTransfersCountAsyncWithHttpInfo($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0])
    {
        $returnType = 'int';
        $request = $this->tokensGetTokenTransfersCountRequest($id, $level, $timestamp, $token_id, $token_contract, $token_token_id, $token_standard, $token_metadata, $anyof, $from, $to, $amount, $transaction_id, $origination_id, $migration_id, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokenTransfersCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $level Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $timestamp Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetBalanceParameter $token_id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $token_contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $token_standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $token_metadata Filter by metadata. Note, this parameter supports the following format: &#x60;token.metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by, for example: &#x60;?token.metadata.symbol.in&#x3D;kUSD,uUSD&#x60;.   Click on the parameter to expand more details. (optional)
     * @param  BlocksGetAnyofParameter $anyof Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $from Filter by sender account address.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $to Filter by target account address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $amount Filter by amount.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $transaction_id Filter by id of the transaction, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $origination_id Filter by id of the origination, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  StakingGetStakingUpdatesCountRoundingErrorParameter $migration_id Filter by id of the migration, caused the token transfer.   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokenTransfersCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokenTransfersCountRequest($id = null, $level = null, $timestamp = null, $token_id = null, $token_contract = null, $token_token_id = null, $token_standard = null, $token_metadata = null, $anyof = null, $from = null, $to = null, $amount = null, $transaction_id = null, $origination_id = null, $migration_id = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokenTransfersCount'][0])
    {


















        $resourcePath = '/v1/tokens/transfers/count';
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
            $token_id,
            'token.id', // param base name
            'OneOfInt64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_contract,
            'token.contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_token_id,
            'token.tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_standard,
            'token.standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_metadata,
            'token.metadata', // param base name
            'OneOfJsonParameter', // openApiType
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
            $origination_id,
            'originationId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $migration_id,
            'migrationId', // param base name
            'OneOfInt64NullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
     * Operation tokensGetTokens
     *
     * Get tokens
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Bzzhh\Tzkt\Model\Token[]
     */
    public function tokensGetTokens($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokens'][0])
    {
        list($response) = $this->tokensGetTokensWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokensWithHttpInfo
     *
     * Get tokens
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Bzzhh\Tzkt\Model\Token[], HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokensWithHttpInfo($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokens'][0])
    {
        $request = $this->tokensGetTokensRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
                    if ('\Bzzhh\Tzkt\Model\Token[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Bzzhh\Tzkt\Model\Token[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Bzzhh\Tzkt\Model\Token[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Bzzhh\Tzkt\Model\Token[]';
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
                        '\Bzzhh\Tzkt\Model\Token[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tokensGetTokensAsync
     *
     * Get tokens
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokensAsync($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokens'][0])
    {
        return $this->tokensGetTokensAsyncWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokensAsyncWithHttpInfo
     *
     * Get tokens
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokensAsyncWithHttpInfo($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokens'][0])
    {
        $returnType = '\Bzzhh\Tzkt\Model\Token[]';
        $request = $this->tokensGetTokensRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'tokensGetTokens'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  AccountsGetSortParameter $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOffsetParameter $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int $limit Maximum number of items to return. (optional)
     * @param  BigMapsGetBigMapKeysSelectParameter $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokensRequest($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, $sort = null, $offset = null, $limit = null, $select = null, string $contentType = self::contentTypes['tokensGetTokens'][0])
    {














        if ($limit !== null && $limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokens, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TokensApi.tokensGetTokens, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/tokens';
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
            $contract,
            'contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $standard,
            'standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
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
            $metadata,
            'metadata', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
     * Operation tokensGetTokensCount
     *
     * Get tokens count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function tokensGetTokensCount($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokensCount'][0])
    {
        list($response) = $this->tokensGetTokensCountWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);
        return $response;
    }

    /**
     * Operation tokensGetTokensCountWithHttpInfo
     *
     * Get tokens count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws \Bzzhh\Tzkt\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokensGetTokensCountWithHttpInfo($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokensCount'][0])
    {
        $request = $this->tokensGetTokensCountRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);

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
     * Operation tokensGetTokensCountAsync
     *
     * Get tokens count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokensCountAsync($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokensCount'][0])
    {
        return $this->tokensGetTokensCountAsyncWithHttpInfo($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokensGetTokensCountAsyncWithHttpInfo
     *
     * Get tokens count
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokensGetTokensCountAsyncWithHttpInfo($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokensCount'][0])
    {
        $returnType = 'int';
        $request = $this->tokensGetTokensCountRequest($id, $contract, $token_id, $standard, $first_minter, $first_level, $first_time, $last_level, $last_time, $metadata, $indexed_at, $contentType);

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
     * Create request for operation 'tokensGetTokensCount'
     *
     * @param  AccountsGetBalanceParameter $id Filter by internal TzKT id. Note, this is not the same as &#x60;tokenId&#x60; nat value.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $contract Filter by contract address.   Click on the parameter to expand more details. (optional)
     * @param  TicketsGetTicketBalancesCountBalanceParameter $token_id Filter by tokenId (for FA1.2 tokens tokenId is always &#x60;\&quot;0\&quot;&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  TokensGetTokensCountStandardParameter $standard Filter by token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetDelegateParameter $first_minter Filter by address of the first minter.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $first_level Filter by level of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $first_time Filter by timestamp (ISO 8601) of the block where the token was first seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetIdParameter $last_level Filter by level of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  BigMapsGetBigMapKeysFirstTimeParameter $last_time Filter by timestamp (ISO 8601) of the block where the token was last seen.   Click on the parameter to expand more details. (optional)
     * @param  AccountsGetOperationsParameterParameter $metadata Filter by metadata.   Note, this parameter supports the following format: &#x60;metadata{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?metadata.symbol.in&#x3D;kUSD,uUSD&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  CommitmentsGetAllActivationLevelParameter $indexed_at (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokensGetTokensCount'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokensGetTokensCountRequest($id = null, $contract = null, $token_id = null, $standard = null, $first_minter = null, $first_level = null, $first_time = null, $last_level = null, $last_time = null, $metadata = null, $indexed_at = null, string $contentType = self::contentTypes['tokensGetTokensCount'][0])
    {













        $resourcePath = '/v1/tokens/count';
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
            $contract,
            'contract', // param base name
            'OneOfAccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token_id,
            'tokenId', // param base name
            'OneOfNatParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $standard,
            'standard', // param base name
            'OneOfTokenStandardParameter', // openApiType
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
            $metadata,
            'metadata', // param base name
            'OneOfJsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $indexed_at,
            'indexedAt', // param base name
            'OneOfInt32NullParameter', // openApiType
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
