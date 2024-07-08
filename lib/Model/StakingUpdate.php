<?php
/**
 * StakingUpdate
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
 * StakingUpdate Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StakingUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StakingUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'cycle' => 'int',
        'baker' => '\Bzzhh\Tzkt\Model\StakingUpdateBaker',
        'staker' => '\Bzzhh\Tzkt\Model\StakingUpdateStaker',
        'type' => 'string',
        'amount' => 'int',
        'pseudotokens' => 'string',
        'rounding_error' => 'int',
        'autostaking_op_id' => 'int',
        'staking_op_id' => 'int',
        'delegation_op_id' => 'int',
        'double_baking_op_id' => 'int',
        'double_endorsing_op_id' => 'int',
        'double_preendorsing_op_id' => 'int'
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
        'level' => 'int32',
        'timestamp' => 'date-time',
        'cycle' => 'int32',
        'baker' => null,
        'staker' => null,
        'type' => null,
        'amount' => 'int64',
        'pseudotokens' => null,
        'rounding_error' => 'int64',
        'autostaking_op_id' => 'int64',
        'staking_op_id' => 'int64',
        'delegation_op_id' => 'int64',
        'double_baking_op_id' => 'int64',
        'double_endorsing_op_id' => 'int64',
        'double_preendorsing_op_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'level' => false,
		'timestamp' => false,
		'cycle' => false,
		'baker' => true,
		'staker' => true,
		'type' => true,
		'amount' => false,
		'pseudotokens' => true,
		'rounding_error' => true,
		'autostaking_op_id' => true,
		'staking_op_id' => true,
		'delegation_op_id' => true,
		'double_baking_op_id' => true,
		'double_endorsing_op_id' => true,
		'double_preendorsing_op_id' => true
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
        'timestamp' => 'timestamp',
        'cycle' => 'cycle',
        'baker' => 'baker',
        'staker' => 'staker',
        'type' => 'type',
        'amount' => 'amount',
        'pseudotokens' => 'pseudotokens',
        'rounding_error' => 'roundingError',
        'autostaking_op_id' => 'autostakingOpId',
        'staking_op_id' => 'stakingOpId',
        'delegation_op_id' => 'delegationOpId',
        'double_baking_op_id' => 'doubleBakingOpId',
        'double_endorsing_op_id' => 'doubleEndorsingOpId',
        'double_preendorsing_op_id' => 'doublePreendorsingOpId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'cycle' => 'setCycle',
        'baker' => 'setBaker',
        'staker' => 'setStaker',
        'type' => 'setType',
        'amount' => 'setAmount',
        'pseudotokens' => 'setPseudotokens',
        'rounding_error' => 'setRoundingError',
        'autostaking_op_id' => 'setAutostakingOpId',
        'staking_op_id' => 'setStakingOpId',
        'delegation_op_id' => 'setDelegationOpId',
        'double_baking_op_id' => 'setDoubleBakingOpId',
        'double_endorsing_op_id' => 'setDoubleEndorsingOpId',
        'double_preendorsing_op_id' => 'setDoublePreendorsingOpId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'cycle' => 'getCycle',
        'baker' => 'getBaker',
        'staker' => 'getStaker',
        'type' => 'getType',
        'amount' => 'getAmount',
        'pseudotokens' => 'getPseudotokens',
        'rounding_error' => 'getRoundingError',
        'autostaking_op_id' => 'getAutostakingOpId',
        'staking_op_id' => 'getStakingOpId',
        'delegation_op_id' => 'getDelegationOpId',
        'double_baking_op_id' => 'getDoubleBakingOpId',
        'double_endorsing_op_id' => 'getDoubleEndorsingOpId',
        'double_preendorsing_op_id' => 'getDoublePreendorsingOpId'
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
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('cycle', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('staker', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('pseudotokens', $data ?? [], null);
        $this->setIfExists('rounding_error', $data ?? [], null);
        $this->setIfExists('autostaking_op_id', $data ?? [], null);
        $this->setIfExists('staking_op_id', $data ?? [], null);
        $this->setIfExists('delegation_op_id', $data ?? [], null);
        $this->setIfExists('double_baking_op_id', $data ?? [], null);
        $this->setIfExists('double_endorsing_op_id', $data ?? [], null);
        $this->setIfExists('double_preendorsing_op_id', $data ?? [], null);
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
     * @param int|null $id Internal TzKT ID.   **[sortable]**
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
     * @param int|null $level Level of the block where the staking update happened.   **[sortable]**
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
     * @param \DateTime|null $timestamp Timestamp of the block where the staking update happened.
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
     * @param int|null $cycle For `unstake`, `restake`, `finalize` and `slash_unstaked` update types it's freezer cycle, othrewise it's cycle of the block.
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
     * Gets baker
     *
     * @return \Bzzhh\Tzkt\Model\StakingUpdateBaker|null
     */
    public function getBaker()
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Bzzhh\Tzkt\Model\StakingUpdateBaker|null $baker baker
     *
     * @return self
     */
    public function setBaker($baker)
    {

        if (is_null($baker)) {
            array_push($this->openAPINullablesSetToNull, 'baker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('baker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['baker'] = $baker;

        return $this;
    }

    /**
     * Gets staker
     *
     * @return \Bzzhh\Tzkt\Model\StakingUpdateStaker|null
     */
    public function getStaker()
    {
        return $this->container['staker'];
    }

    /**
     * Sets staker
     *
     * @param \Bzzhh\Tzkt\Model\StakingUpdateStaker|null $staker staker
     *
     * @return self
     */
    public function setStaker($staker)
    {

        if (is_null($staker)) {
            array_push($this->openAPINullablesSetToNull, 'staker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['staker'] = $staker;

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
     * @param string|null $type Staking update type (`stake`, `unstake`, `restake`, `finalize`, `slash_staked`, `slash_unstaked`).
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
     * @param int|null $amount Amount (mutez).
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
     * Gets pseudotokens
     *
     * @return string|null
     */
    public function getPseudotokens()
    {
        return $this->container['pseudotokens'];
    }

    /**
     * Sets pseudotokens
     *
     * @param string|null $pseudotokens Amount of staking pseudotokens minted or burnt.
     *
     * @return self
     */
    public function setPseudotokens($pseudotokens)
    {

        if (is_null($pseudotokens)) {
            array_push($this->openAPINullablesSetToNull, 'pseudotokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pseudotokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pseudotokens'] = $pseudotokens;

        return $this;
    }

    /**
     * Gets rounding_error
     *
     * @return int|null
     */
    public function getRoundingError()
    {
        return $this->container['rounding_error'];
    }

    /**
     * Sets rounding_error
     *
     * @param int|null $rounding_error Protocol rounding error, appearing after slashing.
     *
     * @return self
     */
    public function setRoundingError($rounding_error)
    {

        if (is_null($rounding_error)) {
            array_push($this->openAPINullablesSetToNull, 'rounding_error');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding_error', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['rounding_error'] = $rounding_error;

        return $this;
    }

    /**
     * Gets autostaking_op_id
     *
     * @return int|null
     */
    public function getAutostakingOpId()
    {
        return $this->container['autostaking_op_id'];
    }

    /**
     * Sets autostaking_op_id
     *
     * @param int|null $autostaking_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setAutostakingOpId($autostaking_op_id)
    {

        if (is_null($autostaking_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'autostaking_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autostaking_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['autostaking_op_id'] = $autostaking_op_id;

        return $this;
    }

    /**
     * Gets staking_op_id
     *
     * @return int|null
     */
    public function getStakingOpId()
    {
        return $this->container['staking_op_id'];
    }

    /**
     * Sets staking_op_id
     *
     * @param int|null $staking_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setStakingOpId($staking_op_id)
    {

        if (is_null($staking_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'staking_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staking_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['staking_op_id'] = $staking_op_id;

        return $this;
    }

    /**
     * Gets delegation_op_id
     *
     * @return int|null
     */
    public function getDelegationOpId()
    {
        return $this->container['delegation_op_id'];
    }

    /**
     * Sets delegation_op_id
     *
     * @param int|null $delegation_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setDelegationOpId($delegation_op_id)
    {

        if (is_null($delegation_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'delegation_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delegation_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['delegation_op_id'] = $delegation_op_id;

        return $this;
    }

    /**
     * Gets double_baking_op_id
     *
     * @return int|null
     */
    public function getDoubleBakingOpId()
    {
        return $this->container['double_baking_op_id'];
    }

    /**
     * Sets double_baking_op_id
     *
     * @param int|null $double_baking_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setDoubleBakingOpId($double_baking_op_id)
    {

        if (is_null($double_baking_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'double_baking_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_baking_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['double_baking_op_id'] = $double_baking_op_id;

        return $this;
    }

    /**
     * Gets double_endorsing_op_id
     *
     * @return int|null
     */
    public function getDoubleEndorsingOpId()
    {
        return $this->container['double_endorsing_op_id'];
    }

    /**
     * Sets double_endorsing_op_id
     *
     * @param int|null $double_endorsing_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setDoubleEndorsingOpId($double_endorsing_op_id)
    {

        if (is_null($double_endorsing_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'double_endorsing_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_endorsing_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['double_endorsing_op_id'] = $double_endorsing_op_id;

        return $this;
    }

    /**
     * Gets double_preendorsing_op_id
     *
     * @return int|null
     */
    public function getDoublePreendorsingOpId()
    {
        return $this->container['double_preendorsing_op_id'];
    }

    /**
     * Sets double_preendorsing_op_id
     *
     * @param int|null $double_preendorsing_op_id Id of the operation, caused the staking update. If all `..OpId` fields are null, then the staking update was produced by the protocol migration.
     *
     * @return self
     */
    public function setDoublePreendorsingOpId($double_preendorsing_op_id)
    {

        if (is_null($double_preendorsing_op_id)) {
            array_push($this->openAPINullablesSetToNull, 'double_preendorsing_op_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_preendorsing_op_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['double_preendorsing_op_id'] = $double_preendorsing_op_id;

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


