<?php
/**
 * State
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
 * State Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class State implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'State';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chain' => 'string',
        'chain_id' => 'string',
        'cycle' => 'int',
        'level' => 'int',
        'hash' => 'string',
        'protocol' => 'string',
        'next_protocol' => 'string',
        'timestamp' => '\DateTime',
        'voting_epoch' => 'int',
        'voting_period' => 'int',
        'known_level' => 'int',
        'last_sync' => '\DateTime',
        'synced' => 'bool',
        'quote_level' => 'int',
        'quote_btc' => 'float',
        'quote_eur' => 'float',
        'quote_usd' => 'float',
        'quote_cny' => 'float',
        'quote_jpy' => 'float',
        'quote_krw' => 'float',
        'quote_eth' => 'float',
        'quote_gbp' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chain' => null,
        'chain_id' => null,
        'cycle' => 'int32',
        'level' => 'int32',
        'hash' => null,
        'protocol' => null,
        'next_protocol' => null,
        'timestamp' => 'date-time',
        'voting_epoch' => 'int32',
        'voting_period' => 'int32',
        'known_level' => 'int32',
        'last_sync' => 'date-time',
        'synced' => null,
        'quote_level' => 'int32',
        'quote_btc' => 'double',
        'quote_eur' => 'double',
        'quote_usd' => 'double',
        'quote_cny' => 'double',
        'quote_jpy' => 'double',
        'quote_krw' => 'double',
        'quote_eth' => 'double',
        'quote_gbp' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chain' => true,
		'chain_id' => true,
		'cycle' => false,
		'level' => false,
		'hash' => true,
		'protocol' => true,
		'next_protocol' => true,
		'timestamp' => false,
		'voting_epoch' => false,
		'voting_period' => false,
		'known_level' => false,
		'last_sync' => false,
		'synced' => false,
		'quote_level' => false,
		'quote_btc' => false,
		'quote_eur' => false,
		'quote_usd' => false,
		'quote_cny' => false,
		'quote_jpy' => false,
		'quote_krw' => false,
		'quote_eth' => false,
		'quote_gbp' => false
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
        'chain' => 'chain',
        'chain_id' => 'chainId',
        'cycle' => 'cycle',
        'level' => 'level',
        'hash' => 'hash',
        'protocol' => 'protocol',
        'next_protocol' => 'nextProtocol',
        'timestamp' => 'timestamp',
        'voting_epoch' => 'votingEpoch',
        'voting_period' => 'votingPeriod',
        'known_level' => 'knownLevel',
        'last_sync' => 'lastSync',
        'synced' => 'synced',
        'quote_level' => 'quoteLevel',
        'quote_btc' => 'quoteBtc',
        'quote_eur' => 'quoteEur',
        'quote_usd' => 'quoteUsd',
        'quote_cny' => 'quoteCny',
        'quote_jpy' => 'quoteJpy',
        'quote_krw' => 'quoteKrw',
        'quote_eth' => 'quoteEth',
        'quote_gbp' => 'quoteGbp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chain' => 'setChain',
        'chain_id' => 'setChainId',
        'cycle' => 'setCycle',
        'level' => 'setLevel',
        'hash' => 'setHash',
        'protocol' => 'setProtocol',
        'next_protocol' => 'setNextProtocol',
        'timestamp' => 'setTimestamp',
        'voting_epoch' => 'setVotingEpoch',
        'voting_period' => 'setVotingPeriod',
        'known_level' => 'setKnownLevel',
        'last_sync' => 'setLastSync',
        'synced' => 'setSynced',
        'quote_level' => 'setQuoteLevel',
        'quote_btc' => 'setQuoteBtc',
        'quote_eur' => 'setQuoteEur',
        'quote_usd' => 'setQuoteUsd',
        'quote_cny' => 'setQuoteCny',
        'quote_jpy' => 'setQuoteJpy',
        'quote_krw' => 'setQuoteKrw',
        'quote_eth' => 'setQuoteEth',
        'quote_gbp' => 'setQuoteGbp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chain' => 'getChain',
        'chain_id' => 'getChainId',
        'cycle' => 'getCycle',
        'level' => 'getLevel',
        'hash' => 'getHash',
        'protocol' => 'getProtocol',
        'next_protocol' => 'getNextProtocol',
        'timestamp' => 'getTimestamp',
        'voting_epoch' => 'getVotingEpoch',
        'voting_period' => 'getVotingPeriod',
        'known_level' => 'getKnownLevel',
        'last_sync' => 'getLastSync',
        'synced' => 'getSynced',
        'quote_level' => 'getQuoteLevel',
        'quote_btc' => 'getQuoteBtc',
        'quote_eur' => 'getQuoteEur',
        'quote_usd' => 'getQuoteUsd',
        'quote_cny' => 'getQuoteCny',
        'quote_jpy' => 'getQuoteJpy',
        'quote_krw' => 'getQuoteKrw',
        'quote_eth' => 'getQuoteEth',
        'quote_gbp' => 'getQuoteGbp'
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
        $this->setIfExists('chain', $data ?? [], null);
        $this->setIfExists('chain_id', $data ?? [], null);
        $this->setIfExists('cycle', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('protocol', $data ?? [], null);
        $this->setIfExists('next_protocol', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('voting_epoch', $data ?? [], null);
        $this->setIfExists('voting_period', $data ?? [], null);
        $this->setIfExists('known_level', $data ?? [], null);
        $this->setIfExists('last_sync', $data ?? [], null);
        $this->setIfExists('synced', $data ?? [], null);
        $this->setIfExists('quote_level', $data ?? [], null);
        $this->setIfExists('quote_btc', $data ?? [], null);
        $this->setIfExists('quote_eur', $data ?? [], null);
        $this->setIfExists('quote_usd', $data ?? [], null);
        $this->setIfExists('quote_cny', $data ?? [], null);
        $this->setIfExists('quote_jpy', $data ?? [], null);
        $this->setIfExists('quote_krw', $data ?? [], null);
        $this->setIfExists('quote_eth', $data ?? [], null);
        $this->setIfExists('quote_gbp', $data ?? [], null);
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
     * Gets chain
     *
     * @return string|null
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     *
     * @param string|null $chain Alias name of the chain (or \"private\" if it's not on the list of known chains)
     *
     * @return self
     */
    public function setChain($chain)
    {

        if (is_null($chain)) {
            array_push($this->openAPINullablesSetToNull, 'chain');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chain', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['chain'] = $chain;

        return $this;
    }

    /**
     * Gets chain_id
     *
     * @return string|null
     */
    public function getChainId()
    {
        return $this->container['chain_id'];
    }

    /**
     * Sets chain_id
     *
     * @param string|null $chain_id Unique identifier of the chain
     *
     * @return self
     */
    public function setChainId($chain_id)
    {

        if (is_null($chain_id)) {
            array_push($this->openAPINullablesSetToNull, 'chain_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chain_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['chain_id'] = $chain_id;

        return $this;
    }

    /**
     * Gets cycle
     *
     * @return int|null
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     *
     * @param int|null $cycle Current cycle
     *
     * @return self
     */
    public function setCycle($cycle)
    {

        if (is_null($cycle)) {
            throw new \InvalidArgumentException('non-nullable cycle cannot be null');
        }

        $this->container['cycle'] = $cycle;

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
     * @param int|null $level The height of the last block from the genesis block
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
     * @param string|null $hash Block hash
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
     * @param string|null $protocol Current protocol hash
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
     * Gets next_protocol
     *
     * @return string|null
     */
    public function getNextProtocol()
    {
        return $this->container['next_protocol'];
    }

    /**
     * Sets next_protocol
     *
     * @param string|null $next_protocol Next block protocol hash
     *
     * @return self
     */
    public function setNextProtocol($next_protocol)
    {

        if (is_null($next_protocol)) {
            array_push($this->openAPINullablesSetToNull, 'next_protocol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_protocol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['next_protocol'] = $next_protocol;

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
     * @param \DateTime|null $timestamp The datetime at which the last block is claimed to have been created (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * Gets voting_epoch
     *
     * @return int|null
     */
    public function getVotingEpoch()
    {
        return $this->container['voting_epoch'];
    }

    /**
     * Sets voting_epoch
     *
     * @param int|null $voting_epoch Current voting epoch index, starting from zero
     *
     * @return self
     */
    public function setVotingEpoch($voting_epoch)
    {

        if (is_null($voting_epoch)) {
            throw new \InvalidArgumentException('non-nullable voting_epoch cannot be null');
        }

        $this->container['voting_epoch'] = $voting_epoch;

        return $this;
    }

    /**
     * Gets voting_period
     *
     * @return int|null
     */
    public function getVotingPeriod()
    {
        return $this->container['voting_period'];
    }

    /**
     * Sets voting_period
     *
     * @param int|null $voting_period Current voting period index, starting from zero
     *
     * @return self
     */
    public function setVotingPeriod($voting_period)
    {

        if (is_null($voting_period)) {
            throw new \InvalidArgumentException('non-nullable voting_period cannot be null');
        }

        $this->container['voting_period'] = $voting_period;

        return $this;
    }

    /**
     * Gets known_level
     *
     * @return int|null
     */
    public function getKnownLevel()
    {
        return $this->container['known_level'];
    }

    /**
     * Sets known_level
     *
     * @param int|null $known_level The height of the last known block from the genesis block
     *
     * @return self
     */
    public function setKnownLevel($known_level)
    {

        if (is_null($known_level)) {
            throw new \InvalidArgumentException('non-nullable known_level cannot be null');
        }

        $this->container['known_level'] = $known_level;

        return $this;
    }

    /**
     * Gets last_sync
     *
     * @return \DateTime|null
     */
    public function getLastSync()
    {
        return $this->container['last_sync'];
    }

    /**
     * Sets last_sync
     *
     * @param \DateTime|null $last_sync The datetime of last TzKT indexer synchronization (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setLastSync($last_sync)
    {

        if (is_null($last_sync)) {
            throw new \InvalidArgumentException('non-nullable last_sync cannot be null');
        }

        $this->container['last_sync'] = $last_sync;

        return $this;
    }

    /**
     * Gets synced
     *
     * @return bool|null
     */
    public function getSynced()
    {
        return $this->container['synced'];
    }

    /**
     * Sets synced
     *
     * @param bool|null $synced State of TzKT indexer synchronization
     *
     * @return self
     */
    public function setSynced($synced)
    {

        if (is_null($synced)) {
            throw new \InvalidArgumentException('non-nullable synced cannot be null');
        }

        $this->container['synced'] = $synced;

        return $this;
    }

    /**
     * Gets quote_level
     *
     * @return int|null
     */
    public function getQuoteLevel()
    {
        return $this->container['quote_level'];
    }

    /**
     * Sets quote_level
     *
     * @param int|null $quote_level The height of the block where quotes were updated last time
     *
     * @return self
     */
    public function setQuoteLevel($quote_level)
    {

        if (is_null($quote_level)) {
            throw new \InvalidArgumentException('non-nullable quote_level cannot be null');
        }

        $this->container['quote_level'] = $quote_level;

        return $this;
    }

    /**
     * Gets quote_btc
     *
     * @return float|null
     */
    public function getQuoteBtc()
    {
        return $this->container['quote_btc'];
    }

    /**
     * Sets quote_btc
     *
     * @param float|null $quote_btc Last known XTZ/BTC price
     *
     * @return self
     */
    public function setQuoteBtc($quote_btc)
    {

        if (is_null($quote_btc)) {
            throw new \InvalidArgumentException('non-nullable quote_btc cannot be null');
        }

        $this->container['quote_btc'] = $quote_btc;

        return $this;
    }

    /**
     * Gets quote_eur
     *
     * @return float|null
     */
    public function getQuoteEur()
    {
        return $this->container['quote_eur'];
    }

    /**
     * Sets quote_eur
     *
     * @param float|null $quote_eur Last known XTZ/EUR price
     *
     * @return self
     */
    public function setQuoteEur($quote_eur)
    {

        if (is_null($quote_eur)) {
            throw new \InvalidArgumentException('non-nullable quote_eur cannot be null');
        }

        $this->container['quote_eur'] = $quote_eur;

        return $this;
    }

    /**
     * Gets quote_usd
     *
     * @return float|null
     */
    public function getQuoteUsd()
    {
        return $this->container['quote_usd'];
    }

    /**
     * Sets quote_usd
     *
     * @param float|null $quote_usd Last known XTZ/USD price
     *
     * @return self
     */
    public function setQuoteUsd($quote_usd)
    {

        if (is_null($quote_usd)) {
            throw new \InvalidArgumentException('non-nullable quote_usd cannot be null');
        }

        $this->container['quote_usd'] = $quote_usd;

        return $this;
    }

    /**
     * Gets quote_cny
     *
     * @return float|null
     */
    public function getQuoteCny()
    {
        return $this->container['quote_cny'];
    }

    /**
     * Sets quote_cny
     *
     * @param float|null $quote_cny Last known XTZ/CNY price
     *
     * @return self
     */
    public function setQuoteCny($quote_cny)
    {

        if (is_null($quote_cny)) {
            throw new \InvalidArgumentException('non-nullable quote_cny cannot be null');
        }

        $this->container['quote_cny'] = $quote_cny;

        return $this;
    }

    /**
     * Gets quote_jpy
     *
     * @return float|null
     */
    public function getQuoteJpy()
    {
        return $this->container['quote_jpy'];
    }

    /**
     * Sets quote_jpy
     *
     * @param float|null $quote_jpy Last known XTZ/JPY price
     *
     * @return self
     */
    public function setQuoteJpy($quote_jpy)
    {

        if (is_null($quote_jpy)) {
            throw new \InvalidArgumentException('non-nullable quote_jpy cannot be null');
        }

        $this->container['quote_jpy'] = $quote_jpy;

        return $this;
    }

    /**
     * Gets quote_krw
     *
     * @return float|null
     */
    public function getQuoteKrw()
    {
        return $this->container['quote_krw'];
    }

    /**
     * Sets quote_krw
     *
     * @param float|null $quote_krw Last known XTZ/KRW price
     *
     * @return self
     */
    public function setQuoteKrw($quote_krw)
    {

        if (is_null($quote_krw)) {
            throw new \InvalidArgumentException('non-nullable quote_krw cannot be null');
        }

        $this->container['quote_krw'] = $quote_krw;

        return $this;
    }

    /**
     * Gets quote_eth
     *
     * @return float|null
     */
    public function getQuoteEth()
    {
        return $this->container['quote_eth'];
    }

    /**
     * Sets quote_eth
     *
     * @param float|null $quote_eth Last known XTZ/ETH price
     *
     * @return self
     */
    public function setQuoteEth($quote_eth)
    {

        if (is_null($quote_eth)) {
            throw new \InvalidArgumentException('non-nullable quote_eth cannot be null');
        }

        $this->container['quote_eth'] = $quote_eth;

        return $this;
    }

    /**
     * Gets quote_gbp
     *
     * @return float|null
     */
    public function getQuoteGbp()
    {
        return $this->container['quote_gbp'];
    }

    /**
     * Sets quote_gbp
     *
     * @param float|null $quote_gbp Last known XTZ/GBP price
     *
     * @return self
     */
    public function setQuoteGbp($quote_gbp)
    {

        if (is_null($quote_gbp)) {
            throw new \InvalidArgumentException('non-nullable quote_gbp cannot be null');
        }

        $this->container['quote_gbp'] = $quote_gbp;

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


