<?php
/**
 * ContractAllOf
 *
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

namespace Bzzhh\Tzkt\Model;

use \ArrayAccess;
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * ContractAllOf Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contract_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'type' => 'string',
        'address' => 'string',
        'kind' => 'string',
        'tzips' => 'string[]',
        'alias' => 'string',
        'balance' => 'int',
        'creator' => 'OneOfCreatorInfo',
        'manager' => 'OneOfManagerInfo',
        'delegate' => 'OneOfDelegateInfo',
        'delegation_level' => 'int',
        'delegation_time' => '\DateTime',
        'num_contracts' => 'int',
        'tokens_count' => 'int',
        'active_tokens_count' => 'int',
        'token_balances_count' => 'int',
        'token_transfers_count' => 'int',
        'tickets_count' => 'int',
        'active_tickets_count' => 'int',
        'ticket_balances_count' => 'int',
        'ticket_transfers_count' => 'int',
        'num_delegations' => 'int',
        'num_originations' => 'int',
        'num_transactions' => 'int',
        'num_reveals' => 'int',
        'num_migrations' => 'int',
        'transfer_ticket_count' => 'int',
        'increase_paid_storage_count' => 'int',
        'events_count' => 'int',
        'first_activity' => 'int',
        'first_activity_time' => '\DateTime',
        'last_activity' => 'int',
        'last_activity_time' => '\DateTime',
        'type_hash' => 'int',
        'code_hash' => 'int',
        'metadata' => 'mixed',
        'extras' => 'mixed',
        'storage' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'type' => null,
        'address' => null,
        'kind' => null,
        'tzips' => null,
        'alias' => null,
        'balance' => 'int64',
        'creator' => null,
        'manager' => null,
        'delegate' => null,
        'delegation_level' => 'int32',
        'delegation_time' => 'date-time',
        'num_contracts' => 'int32',
        'tokens_count' => 'int32',
        'active_tokens_count' => 'int32',
        'token_balances_count' => 'int32',
        'token_transfers_count' => 'int32',
        'tickets_count' => 'int32',
        'active_tickets_count' => 'int32',
        'ticket_balances_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'num_delegations' => 'int32',
        'num_originations' => 'int32',
        'num_transactions' => 'int32',
        'num_reveals' => 'int32',
        'num_migrations' => 'int32',
        'transfer_ticket_count' => 'int32',
        'increase_paid_storage_count' => 'int32',
        'events_count' => 'int32',
        'first_activity' => 'int32',
        'first_activity_time' => 'date-time',
        'last_activity' => 'int32',
        'last_activity_time' => 'date-time',
        'type_hash' => 'int32',
        'code_hash' => 'int32',
        'metadata' => null,
        'extras' => null,
        'storage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'type' => true,
		'address' => true,
		'kind' => true,
		'tzips' => true,
		'alias' => true,
		'balance' => false,
		'creator' => true,
		'manager' => true,
		'delegate' => true,
		'delegation_level' => true,
		'delegation_time' => true,
		'num_contracts' => false,
		'tokens_count' => false,
		'active_tokens_count' => false,
		'token_balances_count' => false,
		'token_transfers_count' => false,
		'tickets_count' => false,
		'active_tickets_count' => false,
		'ticket_balances_count' => false,
		'ticket_transfers_count' => false,
		'num_delegations' => false,
		'num_originations' => false,
		'num_transactions' => false,
		'num_reveals' => false,
		'num_migrations' => false,
		'transfer_ticket_count' => false,
		'increase_paid_storage_count' => false,
		'events_count' => false,
		'first_activity' => false,
		'first_activity_time' => false,
		'last_activity' => false,
		'last_activity_time' => false,
		'type_hash' => false,
		'code_hash' => false,
		'metadata' => true,
		'extras' => true,
		'storage' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'address' => 'address',
        'kind' => 'kind',
        'tzips' => 'tzips',
        'alias' => 'alias',
        'balance' => 'balance',
        'creator' => 'creator',
        'manager' => 'manager',
        'delegate' => 'delegate',
        'delegation_level' => 'delegationLevel',
        'delegation_time' => 'delegationTime',
        'num_contracts' => 'numContracts',
        'tokens_count' => 'tokensCount',
        'active_tokens_count' => 'activeTokensCount',
        'token_balances_count' => 'tokenBalancesCount',
        'token_transfers_count' => 'tokenTransfersCount',
        'tickets_count' => 'ticketsCount',
        'active_tickets_count' => 'activeTicketsCount',
        'ticket_balances_count' => 'ticketBalancesCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'num_delegations' => 'numDelegations',
        'num_originations' => 'numOriginations',
        'num_transactions' => 'numTransactions',
        'num_reveals' => 'numReveals',
        'num_migrations' => 'numMigrations',
        'transfer_ticket_count' => 'transferTicketCount',
        'increase_paid_storage_count' => 'increasePaidStorageCount',
        'events_count' => 'eventsCount',
        'first_activity' => 'firstActivity',
        'first_activity_time' => 'firstActivityTime',
        'last_activity' => 'lastActivity',
        'last_activity_time' => 'lastActivityTime',
        'type_hash' => 'typeHash',
        'code_hash' => 'codeHash',
        'metadata' => 'metadata',
        'extras' => 'extras',
        'storage' => 'storage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'address' => 'setAddress',
        'kind' => 'setKind',
        'tzips' => 'setTzips',
        'alias' => 'setAlias',
        'balance' => 'setBalance',
        'creator' => 'setCreator',
        'manager' => 'setManager',
        'delegate' => 'setDelegate',
        'delegation_level' => 'setDelegationLevel',
        'delegation_time' => 'setDelegationTime',
        'num_contracts' => 'setNumContracts',
        'tokens_count' => 'setTokensCount',
        'active_tokens_count' => 'setActiveTokensCount',
        'token_balances_count' => 'setTokenBalancesCount',
        'token_transfers_count' => 'setTokenTransfersCount',
        'tickets_count' => 'setTicketsCount',
        'active_tickets_count' => 'setActiveTicketsCount',
        'ticket_balances_count' => 'setTicketBalancesCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'num_delegations' => 'setNumDelegations',
        'num_originations' => 'setNumOriginations',
        'num_transactions' => 'setNumTransactions',
        'num_reveals' => 'setNumReveals',
        'num_migrations' => 'setNumMigrations',
        'transfer_ticket_count' => 'setTransferTicketCount',
        'increase_paid_storage_count' => 'setIncreasePaidStorageCount',
        'events_count' => 'setEventsCount',
        'first_activity' => 'setFirstActivity',
        'first_activity_time' => 'setFirstActivityTime',
        'last_activity' => 'setLastActivity',
        'last_activity_time' => 'setLastActivityTime',
        'type_hash' => 'setTypeHash',
        'code_hash' => 'setCodeHash',
        'metadata' => 'setMetadata',
        'extras' => 'setExtras',
        'storage' => 'setStorage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'address' => 'getAddress',
        'kind' => 'getKind',
        'tzips' => 'getTzips',
        'alias' => 'getAlias',
        'balance' => 'getBalance',
        'creator' => 'getCreator',
        'manager' => 'getManager',
        'delegate' => 'getDelegate',
        'delegation_level' => 'getDelegationLevel',
        'delegation_time' => 'getDelegationTime',
        'num_contracts' => 'getNumContracts',
        'tokens_count' => 'getTokensCount',
        'active_tokens_count' => 'getActiveTokensCount',
        'token_balances_count' => 'getTokenBalancesCount',
        'token_transfers_count' => 'getTokenTransfersCount',
        'tickets_count' => 'getTicketsCount',
        'active_tickets_count' => 'getActiveTicketsCount',
        'ticket_balances_count' => 'getTicketBalancesCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'num_delegations' => 'getNumDelegations',
        'num_originations' => 'getNumOriginations',
        'num_transactions' => 'getNumTransactions',
        'num_reveals' => 'getNumReveals',
        'num_migrations' => 'getNumMigrations',
        'transfer_ticket_count' => 'getTransferTicketCount',
        'increase_paid_storage_count' => 'getIncreasePaidStorageCount',
        'events_count' => 'getEventsCount',
        'first_activity' => 'getFirstActivity',
        'first_activity_time' => 'getFirstActivityTime',
        'last_activity' => 'getLastActivity',
        'last_activity_time' => 'getLastActivityTime',
        'type_hash' => 'getTypeHash',
        'code_hash' => 'getCodeHash',
        'metadata' => 'getMetadata',
        'extras' => 'getExtras',
        'storage' => 'getStorage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('tzips', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('manager', $data ?? [], null);
        $this->setIfExists('delegate', $data ?? [], null);
        $this->setIfExists('delegation_level', $data ?? [], null);
        $this->setIfExists('delegation_time', $data ?? [], null);
        $this->setIfExists('num_contracts', $data ?? [], null);
        $this->setIfExists('tokens_count', $data ?? [], null);
        $this->setIfExists('active_tokens_count', $data ?? [], null);
        $this->setIfExists('token_balances_count', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('tickets_count', $data ?? [], null);
        $this->setIfExists('active_tickets_count', $data ?? [], null);
        $this->setIfExists('ticket_balances_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('num_delegations', $data ?? [], null);
        $this->setIfExists('num_originations', $data ?? [], null);
        $this->setIfExists('num_transactions', $data ?? [], null);
        $this->setIfExists('num_reveals', $data ?? [], null);
        $this->setIfExists('num_migrations', $data ?? [], null);
        $this->setIfExists('transfer_ticket_count', $data ?? [], null);
        $this->setIfExists('increase_paid_storage_count', $data ?? [], null);
        $this->setIfExists('events_count', $data ?? [], null);
        $this->setIfExists('first_activity', $data ?? [], null);
        $this->setIfExists('first_activity_time', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('last_activity_time', $data ?? [], null);
        $this->setIfExists('type_hash', $data ?? [], null);
        $this->setIfExists('code_hash', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('extras', $data ?? [], null);
        $this->setIfExists('storage', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Internal TzKT id.   **[sortable]**
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the account, `contract` - smart contract programmable account.
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Public key hash of the contract
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind Kind of the contract (`delegator_contract` or `smart_contract`), where `delegator_contract` - manager.tz smart contract for delegation purpose only.
     *
     * @return self
     */
    public function setKind($kind)
    {

        if (is_null($kind)) {
            array_push($this->openAPINullablesSetToNull, 'kind');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('kind', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets tzips
     *
     * @return string[]|null
     */
    public function getTzips()
    {
        return $this->container['tzips'];
    }

    /**
     * Sets tzips
     *
     * @param string[]|null $tzips List of implemented standards (TZIPs).
     *
     * @return self
     */
    public function setTzips($tzips)
    {

        if (is_null($tzips)) {
            array_push($this->openAPINullablesSetToNull, 'tzips');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tzips', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tzips'] = $tzips;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias Name of the project behind the contract or contract description.
     *
     * @return self
     */
    public function setAlias($alias)
    {

        if (is_null($alias)) {
            array_push($this->openAPINullablesSetToNull, 'alias');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alias', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|null $balance Contract balance (micro tez).   **[sortable]**
     *
     * @return self
     */
    public function setBalance($balance)
    {

        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }

        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return OneOfCreatorInfo|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param OneOfCreatorInfo|null $creator Information about the account, which has deployed the contract to the blockchain.   Click on the field to expand more details.
     *
     * @return self
     */
    public function setCreator($creator)
    {

        if (is_null($creator)) {
            array_push($this->openAPINullablesSetToNull, 'creator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets manager
     *
     * @return OneOfManagerInfo|null
     */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
     * Sets manager
     *
     * @param OneOfManagerInfo|null $manager Information about the account, which was marked as a manager when contract was deployed to the blockchain.   Click on the field to expand more details.
     *
     * @return self
     */
    public function setManager($manager)
    {

        if (is_null($manager)) {
            array_push($this->openAPINullablesSetToNull, 'manager');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manager', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['manager'] = $manager;

        return $this;
    }

    /**
     * Gets delegate
     *
     * @return OneOfDelegateInfo|null
     */
    public function getDelegate()
    {
        return $this->container['delegate'];
    }

    /**
     * Sets delegate
     *
     * @param OneOfDelegateInfo|null $delegate Information about the current delegate of the contract. `null` if it's not delegated.   Click on the field to expand more details.
     *
     * @return self
     */
    public function setDelegate($delegate)
    {

        if (is_null($delegate)) {
            array_push($this->openAPINullablesSetToNull, 'delegate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delegate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['delegate'] = $delegate;

        return $this;
    }

    /**
     * Gets delegation_level
     *
     * @return int|null
     */
    public function getDelegationLevel()
    {
        return $this->container['delegation_level'];
    }

    /**
     * Sets delegation_level
     *
     * @param int|null $delegation_level Block height of latest delegation. `null` if it's not delegated.
     *
     * @return self
     */
    public function setDelegationLevel($delegation_level)
    {

        if (is_null($delegation_level)) {
            array_push($this->openAPINullablesSetToNull, 'delegation_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delegation_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['delegation_level'] = $delegation_level;

        return $this;
    }

    /**
     * Gets delegation_time
     *
     * @return \DateTime|null
     */
    public function getDelegationTime()
    {
        return $this->container['delegation_time'];
    }

    /**
     * Sets delegation_time
     *
     * @param \DateTime|null $delegation_time Block datetime of latest delegation (ISO 8601, e.g. `2020-02-20T02:40:57Z`). `null` if it's not delegated.
     *
     * @return self
     */
    public function setDelegationTime($delegation_time)
    {

        if (is_null($delegation_time)) {
            array_push($this->openAPINullablesSetToNull, 'delegation_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delegation_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['delegation_time'] = $delegation_time;

        return $this;
    }

    /**
     * Gets num_contracts
     *
     * @return int|null
     */
    public function getNumContracts()
    {
        return $this->container['num_contracts'];
    }

    /**
     * Sets num_contracts
     *
     * @param int|null $num_contracts Number of contracts, created (originated) and/or managed by the contract.
     *
     * @return self
     */
    public function setNumContracts($num_contracts)
    {

        if (is_null($num_contracts)) {
            throw new \InvalidArgumentException('non-nullable num_contracts cannot be null');
        }

        $this->container['num_contracts'] = $num_contracts;

        return $this;
    }

    /**
     * Gets tokens_count
     *
     * @return int|null
     */
    public function getTokensCount()
    {
        return $this->container['tokens_count'];
    }

    /**
     * Sets tokens_count
     *
     * @param int|null $tokens_count Number of tokens minted in the contract.
     *
     * @return self
     */
    public function setTokensCount($tokens_count)
    {

        if (is_null($tokens_count)) {
            throw new \InvalidArgumentException('non-nullable tokens_count cannot be null');
        }

        $this->container['tokens_count'] = $tokens_count;

        return $this;
    }

    /**
     * Gets active_tokens_count
     *
     * @return int|null
     */
    public function getActiveTokensCount()
    {
        return $this->container['active_tokens_count'];
    }

    /**
     * Sets active_tokens_count
     *
     * @param int|null $active_tokens_count Number of account tokens with non-zero balances.
     *
     * @return self
     */
    public function setActiveTokensCount($active_tokens_count)
    {

        if (is_null($active_tokens_count)) {
            throw new \InvalidArgumentException('non-nullable active_tokens_count cannot be null');
        }

        $this->container['active_tokens_count'] = $active_tokens_count;

        return $this;
    }

    /**
     * Gets token_balances_count
     *
     * @return int|null
     */
    public function getTokenBalancesCount()
    {
        return $this->container['token_balances_count'];
    }

    /**
     * Sets token_balances_count
     *
     * @param int|null $token_balances_count Number of tokens the account ever had.
     *
     * @return self
     */
    public function setTokenBalancesCount($token_balances_count)
    {

        if (is_null($token_balances_count)) {
            throw new \InvalidArgumentException('non-nullable token_balances_count cannot be null');
        }

        $this->container['token_balances_count'] = $token_balances_count;

        return $this;
    }

    /**
     * Gets token_transfers_count
     *
     * @return int|null
     */
    public function getTokenTransfersCount()
    {
        return $this->container['token_transfers_count'];
    }

    /**
     * Sets token_transfers_count
     *
     * @param int|null $token_transfers_count Number of token transfers from/to the account.
     *
     * @return self
     */
    public function setTokenTransfersCount($token_transfers_count)
    {

        if (is_null($token_transfers_count)) {
            throw new \InvalidArgumentException('non-nullable token_transfers_count cannot be null');
        }

        $this->container['token_transfers_count'] = $token_transfers_count;

        return $this;
    }

    /**
     * Gets tickets_count
     *
     * @return int|null
     */
    public function getTicketsCount()
    {
        return $this->container['tickets_count'];
    }

    /**
     * Sets tickets_count
     *
     * @param int|null $tickets_count Number of tickets minted in the contract.
     *
     * @return self
     */
    public function setTicketsCount($tickets_count)
    {

        if (is_null($tickets_count)) {
            throw new \InvalidArgumentException('non-nullable tickets_count cannot be null');
        }

        $this->container['tickets_count'] = $tickets_count;

        return $this;
    }

    /**
     * Gets active_tickets_count
     *
     * @return int|null
     */
    public function getActiveTicketsCount()
    {
        return $this->container['active_tickets_count'];
    }

    /**
     * Sets active_tickets_count
     *
     * @param int|null $active_tickets_count Number of tickets the account owns.
     *
     * @return self
     */
    public function setActiveTicketsCount($active_tickets_count)
    {

        if (is_null($active_tickets_count)) {
            throw new \InvalidArgumentException('non-nullable active_tickets_count cannot be null');
        }

        $this->container['active_tickets_count'] = $active_tickets_count;

        return $this;
    }

    /**
     * Gets ticket_balances_count
     *
     * @return int|null
     */
    public function getTicketBalancesCount()
    {
        return $this->container['ticket_balances_count'];
    }

    /**
     * Sets ticket_balances_count
     *
     * @param int|null $ticket_balances_count Number of tickets the account ever owned.
     *
     * @return self
     */
    public function setTicketBalancesCount($ticket_balances_count)
    {

        if (is_null($ticket_balances_count)) {
            throw new \InvalidArgumentException('non-nullable ticket_balances_count cannot be null');
        }

        $this->container['ticket_balances_count'] = $ticket_balances_count;

        return $this;
    }

    /**
     * Gets ticket_transfers_count
     *
     * @return int|null
     */
    public function getTicketTransfersCount()
    {
        return $this->container['ticket_transfers_count'];
    }

    /**
     * Sets ticket_transfers_count
     *
     * @param int|null $ticket_transfers_count Number of ticket transfers from/to the account.
     *
     * @return self
     */
    public function setTicketTransfersCount($ticket_transfers_count)
    {

        if (is_null($ticket_transfers_count)) {
            throw new \InvalidArgumentException('non-nullable ticket_transfers_count cannot be null');
        }

        $this->container['ticket_transfers_count'] = $ticket_transfers_count;

        return $this;
    }

    /**
     * Gets num_delegations
     *
     * @return int|null
     */
    public function getNumDelegations()
    {
        return $this->container['num_delegations'];
    }

    /**
     * Sets num_delegations
     *
     * @param int|null $num_delegations Number of delegation operations of the contract.
     *
     * @return self
     */
    public function setNumDelegations($num_delegations)
    {

        if (is_null($num_delegations)) {
            throw new \InvalidArgumentException('non-nullable num_delegations cannot be null');
        }

        $this->container['num_delegations'] = $num_delegations;

        return $this;
    }

    /**
     * Gets num_originations
     *
     * @return int|null
     */
    public function getNumOriginations()
    {
        return $this->container['num_originations'];
    }

    /**
     * Sets num_originations
     *
     * @param int|null $num_originations Number of origination (deployment / contract creation) operations, related the contract.
     *
     * @return self
     */
    public function setNumOriginations($num_originations)
    {

        if (is_null($num_originations)) {
            throw new \InvalidArgumentException('non-nullable num_originations cannot be null');
        }

        $this->container['num_originations'] = $num_originations;

        return $this;
    }

    /**
     * Gets num_transactions
     *
     * @return int|null
     */
    public function getNumTransactions()
    {
        return $this->container['num_transactions'];
    }

    /**
     * Sets num_transactions
     *
     * @param int|null $num_transactions Number of transaction (transfer) operations, related to the contract.   **[sortable]**
     *
     * @return self
     */
    public function setNumTransactions($num_transactions)
    {

        if (is_null($num_transactions)) {
            throw new \InvalidArgumentException('non-nullable num_transactions cannot be null');
        }

        $this->container['num_transactions'] = $num_transactions;

        return $this;
    }

    /**
     * Gets num_reveals
     *
     * @return int|null
     */
    public function getNumReveals()
    {
        return $this->container['num_reveals'];
    }

    /**
     * Sets num_reveals
     *
     * @param int|null $num_reveals Number of reveal (is used to reveal the public key associated with an account) operations of the contract.
     *
     * @return self
     */
    public function setNumReveals($num_reveals)
    {

        if (is_null($num_reveals)) {
            throw new \InvalidArgumentException('non-nullable num_reveals cannot be null');
        }

        $this->container['num_reveals'] = $num_reveals;

        return $this;
    }

    /**
     * Gets num_migrations
     *
     * @return int|null
     */
    public function getNumMigrations()
    {
        return $this->container['num_migrations'];
    }

    /**
     * Sets num_migrations
     *
     * @param int|null $num_migrations Number of migration (result of the context (database) migration during a protocol update) operations. related to the contract (synthetic type).
     *
     * @return self
     */
    public function setNumMigrations($num_migrations)
    {

        if (is_null($num_migrations)) {
            throw new \InvalidArgumentException('non-nullable num_migrations cannot be null');
        }

        $this->container['num_migrations'] = $num_migrations;

        return $this;
    }

    /**
     * Gets transfer_ticket_count
     *
     * @return int|null
     */
    public function getTransferTicketCount()
    {
        return $this->container['transfer_ticket_count'];
    }

    /**
     * Sets transfer_ticket_count
     *
     * @param int|null $transfer_ticket_count Number of transfer ticket operations related to the contract.
     *
     * @return self
     */
    public function setTransferTicketCount($transfer_ticket_count)
    {

        if (is_null($transfer_ticket_count)) {
            throw new \InvalidArgumentException('non-nullable transfer_ticket_count cannot be null');
        }

        $this->container['transfer_ticket_count'] = $transfer_ticket_count;

        return $this;
    }

    /**
     * Gets increase_paid_storage_count
     *
     * @return int|null
     */
    public function getIncreasePaidStorageCount()
    {
        return $this->container['increase_paid_storage_count'];
    }

    /**
     * Sets increase_paid_storage_count
     *
     * @param int|null $increase_paid_storage_count Number of `increase_paid_storage` operations related to the contract.
     *
     * @return self
     */
    public function setIncreasePaidStorageCount($increase_paid_storage_count)
    {

        if (is_null($increase_paid_storage_count)) {
            throw new \InvalidArgumentException('non-nullable increase_paid_storage_count cannot be null');
        }

        $this->container['increase_paid_storage_count'] = $increase_paid_storage_count;

        return $this;
    }

    /**
     * Gets events_count
     *
     * @return int|null
     */
    public function getEventsCount()
    {
        return $this->container['events_count'];
    }

    /**
     * Sets events_count
     *
     * @param int|null $events_count Number of events produced by the contract.
     *
     * @return self
     */
    public function setEventsCount($events_count)
    {

        if (is_null($events_count)) {
            throw new \InvalidArgumentException('non-nullable events_count cannot be null');
        }

        $this->container['events_count'] = $events_count;

        return $this;
    }

    /**
     * Gets first_activity
     *
     * @return int|null
     */
    public function getFirstActivity()
    {
        return $this->container['first_activity'];
    }

    /**
     * Sets first_activity
     *
     * @param int|null $first_activity Block height of the contract creation.   **[sortable]**
     *
     * @return self
     */
    public function setFirstActivity($first_activity)
    {

        if (is_null($first_activity)) {
            throw new \InvalidArgumentException('non-nullable first_activity cannot be null');
        }

        $this->container['first_activity'] = $first_activity;

        return $this;
    }

    /**
     * Gets first_activity_time
     *
     * @return \DateTime|null
     */
    public function getFirstActivityTime()
    {
        return $this->container['first_activity_time'];
    }

    /**
     * Sets first_activity_time
     *
     * @param \DateTime|null $first_activity_time Block datetime of the contract creation (ISO 8601, e.g. `2020-02-20T02:40:57Z`).
     *
     * @return self
     */
    public function setFirstActivityTime($first_activity_time)
    {

        if (is_null($first_activity_time)) {
            throw new \InvalidArgumentException('non-nullable first_activity_time cannot be null');
        }

        $this->container['first_activity_time'] = $first_activity_time;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return int|null
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param int|null $last_activity Height of the block in which the account state was changed last time.   **[sortable]**
     *
     * @return self
     */
    public function setLastActivity($last_activity)
    {

        if (is_null($last_activity)) {
            throw new \InvalidArgumentException('non-nullable last_activity cannot be null');
        }

        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets last_activity_time
     *
     * @return \DateTime|null
     */
    public function getLastActivityTime()
    {
        return $this->container['last_activity_time'];
    }

    /**
     * Sets last_activity_time
     *
     * @param \DateTime|null $last_activity_time Datetime of the block in which the account state was changed last time (ISO 8601, e.g. `2020-02-20T02:40:57Z`).
     *
     * @return self
     */
    public function setLastActivityTime($last_activity_time)
    {

        if (is_null($last_activity_time)) {
            throw new \InvalidArgumentException('non-nullable last_activity_time cannot be null');
        }

        $this->container['last_activity_time'] = $last_activity_time;

        return $this;
    }

    /**
     * Gets type_hash
     *
     * @return int|null
     */
    public function getTypeHash()
    {
        return $this->container['type_hash'];
    }

    /**
     * Sets type_hash
     *
     * @param int|null $type_hash 32-bit hash of the contract parameter and storage types. This field can be used for searching similar contracts (which have the same interface).
     *
     * @return self
     */
    public function setTypeHash($type_hash)
    {

        if (is_null($type_hash)) {
            throw new \InvalidArgumentException('non-nullable type_hash cannot be null');
        }

        $this->container['type_hash'] = $type_hash;

        return $this;
    }

    /**
     * Gets code_hash
     *
     * @return int|null
     */
    public function getCodeHash()
    {
        return $this->container['code_hash'];
    }

    /**
     * Sets code_hash
     *
     * @param int|null $code_hash 32-bit hash of the contract code. This field can be used for searching same contracts (which have the same script).
     *
     * @return self
     */
    public function setCodeHash($code_hash)
    {

        if (is_null($code_hash)) {
            throw new \InvalidArgumentException('non-nullable code_hash cannot be null');
        }

        $this->container['code_hash'] = $code_hash;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return mixed|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param mixed|null $metadata TZIP-16 metadata (with `?legacy=true` this field will contain tzkt profile info).
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return mixed|null
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param mixed|null $extras Off-chain extras.
     *
     * @return self
     */
    public function setExtras($extras)
    {

        if (is_null($extras)) {
            array_push($this->openAPINullablesSetToNull, 'extras');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extras', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['extras'] = $extras;

        return $this;
    }

    /**
     * Gets storage
     *
     * @return mixed|null
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param mixed|null $storage Contract storage value. Omitted by default. Use `?includeStorage=true` to include it into response.
     *
     * @return self
     */
    public function setStorage($storage)
    {

        if (is_null($storage)) {
            array_push($this->openAPINullablesSetToNull, 'storage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('storage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['storage'] = $storage;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


