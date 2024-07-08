<?php
/**
 * TransactionOperationAllOf
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
 * TransactionOperationAllOf Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionOperationAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionOperation_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'block' => 'string',
        'hash' => 'string',
        'counter' => 'int',
        'initiator' => 'OneOfAlias',
        'sender' => 'OneOfAlias',
        'sender_code_hash' => 'int',
        'nonce' => 'int',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'storage_limit' => 'int',
        'storage_used' => 'int',
        'baker_fee' => 'int',
        'storage_fee' => 'int',
        'allocation_fee' => 'int',
        'target' => 'OneOfAlias',
        'target_code_hash' => 'int',
        'amount' => 'int',
        'parameter' => 'OneOfTxParameter',
        'storage' => 'mixed',
        'diffs' => '\Bzzhh\Tzkt\Model\BigMapDiff[]',
        'status' => 'string',
        'errors' => '\Bzzhh\Tzkt\Model\OperationError[]',
        'has_internals' => 'bool',
        'token_transfers_count' => 'int',
        'ticket_transfers_count' => 'int',
        'events_count' => 'int',
        'quote' => 'OneOfQuoteShort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => 'int64',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'block' => null,
        'hash' => null,
        'counter' => 'int32',
        'initiator' => null,
        'sender' => null,
        'sender_code_hash' => 'int32',
        'nonce' => 'int32',
        'gas_limit' => 'int32',
        'gas_used' => 'int32',
        'storage_limit' => 'int32',
        'storage_used' => 'int32',
        'baker_fee' => 'int64',
        'storage_fee' => 'int64',
        'allocation_fee' => 'int64',
        'target' => null,
        'target_code_hash' => 'int32',
        'amount' => 'int64',
        'parameter' => null,
        'storage' => null,
        'diffs' => null,
        'status' => null,
        'errors' => null,
        'has_internals' => null,
        'token_transfers_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'events_count' => 'int32',
        'quote' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => true,
		'id' => false,
		'level' => false,
		'timestamp' => false,
		'block' => true,
		'hash' => true,
		'counter' => false,
		'initiator' => true,
		'sender' => true,
		'sender_code_hash' => true,
		'nonce' => true,
		'gas_limit' => false,
		'gas_used' => false,
		'storage_limit' => false,
		'storage_used' => false,
		'baker_fee' => false,
		'storage_fee' => false,
		'allocation_fee' => false,
		'target' => true,
		'target_code_hash' => true,
		'amount' => false,
		'parameter' => true,
		'storage' => true,
		'diffs' => true,
		'status' => true,
		'errors' => true,
		'has_internals' => false,
		'token_transfers_count' => true,
		'ticket_transfers_count' => true,
		'events_count' => true,
		'quote' => true
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
        'type' => 'type',
        'id' => 'id',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'block' => 'block',
        'hash' => 'hash',
        'counter' => 'counter',
        'initiator' => 'initiator',
        'sender' => 'sender',
        'sender_code_hash' => 'senderCodeHash',
        'nonce' => 'nonce',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'storage_limit' => 'storageLimit',
        'storage_used' => 'storageUsed',
        'baker_fee' => 'bakerFee',
        'storage_fee' => 'storageFee',
        'allocation_fee' => 'allocationFee',
        'target' => 'target',
        'target_code_hash' => 'targetCodeHash',
        'amount' => 'amount',
        'parameter' => 'parameter',
        'storage' => 'storage',
        'diffs' => 'diffs',
        'status' => 'status',
        'errors' => 'errors',
        'has_internals' => 'hasInternals',
        'token_transfers_count' => 'tokenTransfersCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'events_count' => 'eventsCount',
        'quote' => 'quote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'block' => 'setBlock',
        'hash' => 'setHash',
        'counter' => 'setCounter',
        'initiator' => 'setInitiator',
        'sender' => 'setSender',
        'sender_code_hash' => 'setSenderCodeHash',
        'nonce' => 'setNonce',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'storage_limit' => 'setStorageLimit',
        'storage_used' => 'setStorageUsed',
        'baker_fee' => 'setBakerFee',
        'storage_fee' => 'setStorageFee',
        'allocation_fee' => 'setAllocationFee',
        'target' => 'setTarget',
        'target_code_hash' => 'setTargetCodeHash',
        'amount' => 'setAmount',
        'parameter' => 'setParameter',
        'storage' => 'setStorage',
        'diffs' => 'setDiffs',
        'status' => 'setStatus',
        'errors' => 'setErrors',
        'has_internals' => 'setHasInternals',
        'token_transfers_count' => 'setTokenTransfersCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'events_count' => 'setEventsCount',
        'quote' => 'setQuote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'block' => 'getBlock',
        'hash' => 'getHash',
        'counter' => 'getCounter',
        'initiator' => 'getInitiator',
        'sender' => 'getSender',
        'sender_code_hash' => 'getSenderCodeHash',
        'nonce' => 'getNonce',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'storage_limit' => 'getStorageLimit',
        'storage_used' => 'getStorageUsed',
        'baker_fee' => 'getBakerFee',
        'storage_fee' => 'getStorageFee',
        'allocation_fee' => 'getAllocationFee',
        'target' => 'getTarget',
        'target_code_hash' => 'getTargetCodeHash',
        'amount' => 'getAmount',
        'parameter' => 'getParameter',
        'storage' => 'getStorage',
        'diffs' => 'getDiffs',
        'status' => 'getStatus',
        'errors' => 'getErrors',
        'has_internals' => 'getHasInternals',
        'token_transfers_count' => 'getTokenTransfersCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'events_count' => 'getEventsCount',
        'quote' => 'getQuote'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('initiator', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('sender_code_hash', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('gas_limit', $data ?? [], null);
        $this->setIfExists('gas_used', $data ?? [], null);
        $this->setIfExists('storage_limit', $data ?? [], null);
        $this->setIfExists('storage_used', $data ?? [], null);
        $this->setIfExists('baker_fee', $data ?? [], null);
        $this->setIfExists('storage_fee', $data ?? [], null);
        $this->setIfExists('allocation_fee', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('target_code_hash', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('parameter', $data ?? [], null);
        $this->setIfExists('storage', $data ?? [], null);
        $this->setIfExists('diffs', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('has_internals', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('events_count', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
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
     * @param string|null $type Type of the operation, `transaction` - is a standard operation used to transfer tezos tokens to an account
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
     * @param int|null $id Unique ID of the operation, stored in the TzKT indexer database
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
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level The height of the block from the genesis block, in which the operation was included
     *
     * @return self
     */
    public function setLevel($level)
    {

        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }

        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Datetime of the block, in which the operation was included (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {

        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }

        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Hash of the block, in which the operation was included
     *
     * @return self
     */
    public function setBlock($block)
    {

        if (is_null($block)) {
            array_push($this->openAPINullablesSetToNull, 'block');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('block', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Hash of the operation
     *
     * @return self
     */
    public function setHash($hash)
    {

        if (is_null($hash)) {
            array_push($this->openAPINullablesSetToNull, 'hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return int|null
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param int|null $counter An account nonce which is used to prevent operation replay
     *
     * @return self
     */
    public function setCounter($counter)
    {

        if (is_null($counter)) {
            throw new \InvalidArgumentException('non-nullable counter cannot be null');
        }

        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return OneOfAlias|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param OneOfAlias|null $initiator Information about the initiator of the transaction call
     *
     * @return self
     */
    public function setInitiator($initiator)
    {

        if (is_null($initiator)) {
            array_push($this->openAPINullablesSetToNull, 'initiator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initiator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return OneOfAlias|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param OneOfAlias|null $sender Information about the account sent the transaction
     *
     * @return self
     */
    public function setSender($sender)
    {

        if (is_null($sender)) {
            array_push($this->openAPINullablesSetToNull, 'sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets sender_code_hash
     *
     * @return int|null
     */
    public function getSenderCodeHash()
    {
        return $this->container['sender_code_hash'];
    }

    /**
     * Sets sender_code_hash
     *
     * @param int|null $sender_code_hash Hash of the sender contract code, or `null` is the sender is not a contract
     *
     * @return self
     */
    public function setSenderCodeHash($sender_code_hash)
    {

        if (is_null($sender_code_hash)) {
            array_push($this->openAPINullablesSetToNull, 'sender_code_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_code_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sender_code_hash'] = $sender_code_hash;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int|null $nonce An account nonce which is used to prevent internal operation replay
     *
     * @return self
     */
    public function setNonce($nonce)
    {

        if (is_null($nonce)) {
            array_push($this->openAPINullablesSetToNull, 'nonce');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nonce', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return int|null
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int|null $gas_limit A cap on the amount of gas a given operation can consume
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {

        if (is_null($gas_limit)) {
            throw new \InvalidArgumentException('non-nullable gas_limit cannot be null');
        }

        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int|null
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int|null $gas_used Amount of gas, consumed by the operation
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {

        if (is_null($gas_used)) {
            throw new \InvalidArgumentException('non-nullable gas_used cannot be null');
        }

        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets storage_limit
     *
     * @return int|null
     */
    public function getStorageLimit()
    {
        return $this->container['storage_limit'];
    }

    /**
     * Sets storage_limit
     *
     * @param int|null $storage_limit A cap on the amount of storage a given operation can consume
     *
     * @return self
     */
    public function setStorageLimit($storage_limit)
    {

        if (is_null($storage_limit)) {
            throw new \InvalidArgumentException('non-nullable storage_limit cannot be null');
        }

        $this->container['storage_limit'] = $storage_limit;

        return $this;
    }

    /**
     * Gets storage_used
     *
     * @return int|null
     */
    public function getStorageUsed()
    {
        return $this->container['storage_used'];
    }

    /**
     * Sets storage_used
     *
     * @param int|null $storage_used Amount of storage, consumed by the operation
     *
     * @return self
     */
    public function setStorageUsed($storage_used)
    {

        if (is_null($storage_used)) {
            throw new \InvalidArgumentException('non-nullable storage_used cannot be null');
        }

        $this->container['storage_used'] = $storage_used;

        return $this;
    }

    /**
     * Gets baker_fee
     *
     * @return int|null
     */
    public function getBakerFee()
    {
        return $this->container['baker_fee'];
    }

    /**
     * Sets baker_fee
     *
     * @param int|null $baker_fee Fee to the baker, produced block, in which the operation was included (micro tez)
     *
     * @return self
     */
    public function setBakerFee($baker_fee)
    {

        if (is_null($baker_fee)) {
            throw new \InvalidArgumentException('non-nullable baker_fee cannot be null');
        }

        $this->container['baker_fee'] = $baker_fee;

        return $this;
    }

    /**
     * Gets storage_fee
     *
     * @return int|null
     */
    public function getStorageFee()
    {
        return $this->container['storage_fee'];
    }

    /**
     * Sets storage_fee
     *
     * @param int|null $storage_fee The amount of funds burned from the sender account for used the blockchain storage (micro tez)
     *
     * @return self
     */
    public function setStorageFee($storage_fee)
    {

        if (is_null($storage_fee)) {
            throw new \InvalidArgumentException('non-nullable storage_fee cannot be null');
        }

        $this->container['storage_fee'] = $storage_fee;

        return $this;
    }

    /**
     * Gets allocation_fee
     *
     * @return int|null
     */
    public function getAllocationFee()
    {
        return $this->container['allocation_fee'];
    }

    /**
     * Sets allocation_fee
     *
     * @param int|null $allocation_fee The amount of funds burned from the sender account for account creation (micro tez)
     *
     * @return self
     */
    public function setAllocationFee($allocation_fee)
    {

        if (is_null($allocation_fee)) {
            throw new \InvalidArgumentException('non-nullable allocation_fee cannot be null');
        }

        $this->container['allocation_fee'] = $allocation_fee;

        return $this;
    }

    /**
     * Gets target
     *
     * @return OneOfAlias|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param OneOfAlias|null $target Information about the target of the transaction
     *
     * @return self
     */
    public function setTarget($target)
    {

        if (is_null($target)) {
            array_push($this->openAPINullablesSetToNull, 'target');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets target_code_hash
     *
     * @return int|null
     */
    public function getTargetCodeHash()
    {
        return $this->container['target_code_hash'];
    }

    /**
     * Sets target_code_hash
     *
     * @param int|null $target_code_hash Hash of the target contract code, or `null` is the target is not a contract
     *
     * @return self
     */
    public function setTargetCodeHash($target_code_hash)
    {

        if (is_null($target_code_hash)) {
            array_push($this->openAPINullablesSetToNull, 'target_code_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target_code_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['target_code_hash'] = $target_code_hash;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The transaction amount (micro tez)
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets parameter
     *
     * @return OneOfTxParameter|null
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param OneOfTxParameter|null $parameter Transaction parameter, including called entrypoint and value passed to the entrypoint.
     *
     * @return self
     */
    public function setParameter($parameter)
    {

        if (is_null($parameter)) {
            array_push($this->openAPINullablesSetToNull, 'parameter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parameter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['parameter'] = $parameter;

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
     * @param mixed|null $storage Contract storage after executing the transaction converted to human-readable JSON. Note: you can configure storage format by setting `micheline` query parameter.
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
     * Gets diffs
     *
     * @return \Bzzhh\Tzkt\Model\BigMapDiff[]|null
     */
    public function getDiffs()
    {
        return $this->container['diffs'];
    }

    /**
     * Sets diffs
     *
     * @param \Bzzhh\Tzkt\Model\BigMapDiff[]|null $diffs List of bigmap updates (aka big_map_diffs) caused by the transaction.
     *
     * @return self
     */
    public function setDiffs($diffs)
    {

        if (is_null($diffs)) {
            array_push($this->openAPINullablesSetToNull, 'diffs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('diffs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['diffs'] = $diffs;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Operation status (`applied` - an operation applied by the node and successfully added to the blockchain, `failed` - an operation which failed with some particular error (not enough balance, gas limit, etc), `backtracked` - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, `skipped` - all operations after the failed one in an operation group)
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Bzzhh\Tzkt\Model\OperationError[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Bzzhh\Tzkt\Model\OperationError[]|null $errors List of errors provided by the node, injected the operation to the blockchain. `null` if there is no errors
     *
     * @return self
     */
    public function setErrors($errors)
    {

        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets has_internals
     *
     * @return bool|null
     */
    public function getHasInternals()
    {
        return $this->container['has_internals'];
    }

    /**
     * Sets has_internals
     *
     * @param bool|null $has_internals An indication of whether the transaction has an internal operations `true` - there are internal operations `false` - no internal operations
     *
     * @return self
     */
    public function setHasInternals($has_internals)
    {

        if (is_null($has_internals)) {
            throw new \InvalidArgumentException('non-nullable has_internals cannot be null');
        }

        $this->container['has_internals'] = $has_internals;

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
     * @param int|null $token_transfers_count Number of token transfers produced by the operation, or `null` if there are no transfers
     *
     * @return self
     */
    public function setTokenTransfersCount($token_transfers_count)
    {

        if (is_null($token_transfers_count)) {
            array_push($this->openAPINullablesSetToNull, 'token_transfers_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('token_transfers_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['token_transfers_count'] = $token_transfers_count;

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
     * @param int|null $ticket_transfers_count Number of ticket transfers produced by the operation, or `null` if there are no transfers
     *
     * @return self
     */
    public function setTicketTransfersCount($ticket_transfers_count)
    {

        if (is_null($ticket_transfers_count)) {
            array_push($this->openAPINullablesSetToNull, 'ticket_transfers_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ticket_transfers_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ticket_transfers_count'] = $ticket_transfers_count;

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
     * @param int|null $events_count Number of events produced by the operation, or `null` if there are no events
     *
     * @return self
     */
    public function setEventsCount($events_count)
    {

        if (is_null($events_count)) {
            array_push($this->openAPINullablesSetToNull, 'events_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('events_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['events_count'] = $events_count;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return OneOfQuoteShort|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param OneOfQuoteShort|null $quote Injected historical quote at the time of operation
     *
     * @return self
     */
    public function setQuote($quote)
    {

        if (is_null($quote)) {
            array_push($this->openAPINullablesSetToNull, 'quote');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quote', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['quote'] = $quote;

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


