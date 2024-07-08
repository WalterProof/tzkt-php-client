<?php
/**
 * SrMessage
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
 * SrMessage Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SrMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SrMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'level' => 'int',
        'index' => 'int',
        'timestamp' => '\DateTime',
        'type' => 'string',
        'predecessor_hash' => 'string',
        'predecessor_timestamp' => '\DateTime',
        'initiator' => '\Bzzhh\Tzkt\Model\SrMessageInitiator',
        'sender' => '\Bzzhh\Tzkt\Model\SrMessageSender',
        'target' => '\Bzzhh\Tzkt\Model\SrMessageTarget',
        'entrypoint' => 'string',
        'parameter' => 'mixed',
        'payload' => 'string',
        'protocol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'level' => 'int32',
        'index' => 'int32',
        'timestamp' => 'date-time',
        'type' => null,
        'predecessor_hash' => null,
        'predecessor_timestamp' => 'date-time',
        'initiator' => null,
        'sender' => null,
        'target' => null,
        'entrypoint' => null,
        'parameter' => null,
        'payload' => 'byte',
        'protocol' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'level' => false,
		'index' => false,
		'timestamp' => false,
		'type' => true,
		'predecessor_hash' => true,
		'predecessor_timestamp' => true,
		'initiator' => true,
		'sender' => true,
		'target' => true,
		'entrypoint' => true,
		'parameter' => true,
		'payload' => true,
		'protocol' => true
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
        'level' => 'level',
        'index' => 'index',
        'timestamp' => 'timestamp',
        'type' => 'type',
        'predecessor_hash' => 'predecessorHash',
        'predecessor_timestamp' => 'predecessorTimestamp',
        'initiator' => 'initiator',
        'sender' => 'sender',
        'target' => 'target',
        'entrypoint' => 'entrypoint',
        'parameter' => 'parameter',
        'payload' => 'payload',
        'protocol' => 'protocol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'level' => 'setLevel',
        'index' => 'setIndex',
        'timestamp' => 'setTimestamp',
        'type' => 'setType',
        'predecessor_hash' => 'setPredecessorHash',
        'predecessor_timestamp' => 'setPredecessorTimestamp',
        'initiator' => 'setInitiator',
        'sender' => 'setSender',
        'target' => 'setTarget',
        'entrypoint' => 'setEntrypoint',
        'parameter' => 'setParameter',
        'payload' => 'setPayload',
        'protocol' => 'setProtocol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'level' => 'getLevel',
        'index' => 'getIndex',
        'timestamp' => 'getTimestamp',
        'type' => 'getType',
        'predecessor_hash' => 'getPredecessorHash',
        'predecessor_timestamp' => 'getPredecessorTimestamp',
        'initiator' => 'getInitiator',
        'sender' => 'getSender',
        'target' => 'getTarget',
        'entrypoint' => 'getEntrypoint',
        'parameter' => 'getParameter',
        'payload' => 'getPayload',
        'protocol' => 'getProtocol'
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
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('predecessor_hash', $data ?? [], null);
        $this->setIfExists('predecessor_timestamp', $data ?? [], null);
        $this->setIfExists('initiator', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('entrypoint', $data ?? [], null);
        $this->setIfExists('parameter', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('protocol', $data ?? [], null);
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
     * @param int|null $level Level of the block where the message was pushed.   **[sortable]**
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
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index Index of the inbox message within the block.
     *
     * @return self
     */
    public function setIndex($index)
    {

        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }

        $this->container['index'] = $index;

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
     * @param \DateTime|null $timestamp Timestamp of the block where the message was pushed.
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
     * @param string|null $type Type of the message (`level_start`, `level_info`, `level_end`, `transfer`, `external`, `migration`).
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
     * Gets predecessor_hash
     *
     * @return string|null
     */
    public function getPredecessorHash()
    {
        return $this->container['predecessor_hash'];
    }

    /**
     * Sets predecessor_hash
     *
     * @param string|null $predecessor_hash For `level_info` messages only. Hash of the predecessor block.
     *
     * @return self
     */
    public function setPredecessorHash($predecessor_hash)
    {

        if (is_null($predecessor_hash)) {
            array_push($this->openAPINullablesSetToNull, 'predecessor_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('predecessor_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['predecessor_hash'] = $predecessor_hash;

        return $this;
    }

    /**
     * Gets predecessor_timestamp
     *
     * @return \DateTime|null
     */
    public function getPredecessorTimestamp()
    {
        return $this->container['predecessor_timestamp'];
    }

    /**
     * Sets predecessor_timestamp
     *
     * @param \DateTime|null $predecessor_timestamp For `level_info` messages only. Timestamp of the predecessor block.
     *
     * @return self
     */
    public function setPredecessorTimestamp($predecessor_timestamp)
    {

        if (is_null($predecessor_timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'predecessor_timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('predecessor_timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['predecessor_timestamp'] = $predecessor_timestamp;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \Bzzhh\Tzkt\Model\SrMessageInitiator|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Bzzhh\Tzkt\Model\SrMessageInitiator|null $initiator initiator
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
     * @return \Bzzhh\Tzkt\Model\SrMessageSender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Bzzhh\Tzkt\Model\SrMessageSender|null $sender sender
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
     * Gets target
     *
     * @return \Bzzhh\Tzkt\Model\SrMessageTarget|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \Bzzhh\Tzkt\Model\SrMessageTarget|null $target target
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
     * Gets entrypoint
     *
     * @return string|null
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint
     *
     * @param string|null $entrypoint For `transfer` messages only. Entrypoint called in the target rollup
     *
     * @return self
     */
    public function setEntrypoint($entrypoint)
    {

        if (is_null($entrypoint)) {
            array_push($this->openAPINullablesSetToNull, 'entrypoint');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entrypoint', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['entrypoint'] = $entrypoint;

        return $this;
    }

    /**
     * Gets parameter
     *
     * @return mixed|null
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param mixed|null $parameter For `transfer` messages only. Value passed to the called entrypoint. Note: you can configure parameters format by setting `micheline` query parameter.
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
     * Gets payload
     *
     * @return string|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param string|null $payload For `external` messages only. Payload bytes (in base64).
     *
     * @return self
     */
    public function setPayload($payload)
    {

        if (is_null($payload)) {
            array_push($this->openAPINullablesSetToNull, 'payload');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payload', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string|null $protocol For `migration` messages only. Version of the new protocol (e.g. 'nairobi_017').
     *
     * @return self
     */
    public function setProtocol($protocol)
    {

        if (is_null($protocol)) {
            array_push($this->openAPINullablesSetToNull, 'protocol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('protocol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['protocol'] = $protocol;

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


