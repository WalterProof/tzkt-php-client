<?php
/**
 * Cycle
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
 * Cycle Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Cycle implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'first_level' => 'int',
        'start_time' => '\DateTime',
        'last_level' => 'int',
        'end_time' => '\DateTime',
        'snapshot_level' => 'int',
        'random_seed' => 'string',
        'total_bakers' => 'int',
        'total_baking_power' => 'int',
        'block_reward' => 'int',
        'block_bonus_per_slot' => 'int',
        'endorsement_reward_per_slot' => 'int',
        'nonce_revelation_reward' => 'int',
        'vdf_revelation_reward' => 'int',
        'quote' => '\Bzzhh\Tzkt\Model\CycleQuote',
        'snapshot_index' => 'int',
        'lb_subsidy' => 'int',
        'total_staking' => 'int',
        'total_delegators' => 'int',
        'total_delegated' => 'int',
        'selected_bakers' => 'int',
        'selected_stake' => 'int',
        'total_rolls' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'first_level' => 'int32',
        'start_time' => 'date-time',
        'last_level' => 'int32',
        'end_time' => 'date-time',
        'snapshot_level' => 'int32',
        'random_seed' => null,
        'total_bakers' => 'int32',
        'total_baking_power' => 'int64',
        'block_reward' => 'int64',
        'block_bonus_per_slot' => 'int64',
        'endorsement_reward_per_slot' => 'int64',
        'nonce_revelation_reward' => 'int64',
        'vdf_revelation_reward' => 'int64',
        'quote' => null,
        'snapshot_index' => 'int32',
        'lb_subsidy' => 'int64',
        'total_staking' => 'int64',
        'total_delegators' => 'int32',
        'total_delegated' => 'int64',
        'selected_bakers' => 'int32',
        'selected_stake' => 'int64',
        'total_rolls' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'index' => false,
		'first_level' => false,
		'start_time' => false,
		'last_level' => false,
		'end_time' => false,
		'snapshot_level' => false,
		'random_seed' => true,
		'total_bakers' => false,
		'total_baking_power' => false,
		'block_reward' => false,
		'block_bonus_per_slot' => false,
		'endorsement_reward_per_slot' => false,
		'nonce_revelation_reward' => false,
		'vdf_revelation_reward' => false,
		'quote' => true,
		'snapshot_index' => false,
		'lb_subsidy' => false,
		'total_staking' => false,
		'total_delegators' => false,
		'total_delegated' => false,
		'selected_bakers' => false,
		'selected_stake' => false,
		'total_rolls' => false
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
        'index' => 'index',
        'first_level' => 'firstLevel',
        'start_time' => 'startTime',
        'last_level' => 'lastLevel',
        'end_time' => 'endTime',
        'snapshot_level' => 'snapshotLevel',
        'random_seed' => 'randomSeed',
        'total_bakers' => 'totalBakers',
        'total_baking_power' => 'totalBakingPower',
        'block_reward' => 'blockReward',
        'block_bonus_per_slot' => 'blockBonusPerSlot',
        'endorsement_reward_per_slot' => 'endorsementRewardPerSlot',
        'nonce_revelation_reward' => 'nonceRevelationReward',
        'vdf_revelation_reward' => 'vdfRevelationReward',
        'quote' => 'quote',
        'snapshot_index' => 'snapshotIndex',
        'lb_subsidy' => 'lbSubsidy',
        'total_staking' => 'totalStaking',
        'total_delegators' => 'totalDelegators',
        'total_delegated' => 'totalDelegated',
        'selected_bakers' => 'selectedBakers',
        'selected_stake' => 'selectedStake',
        'total_rolls' => 'totalRolls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'first_level' => 'setFirstLevel',
        'start_time' => 'setStartTime',
        'last_level' => 'setLastLevel',
        'end_time' => 'setEndTime',
        'snapshot_level' => 'setSnapshotLevel',
        'random_seed' => 'setRandomSeed',
        'total_bakers' => 'setTotalBakers',
        'total_baking_power' => 'setTotalBakingPower',
        'block_reward' => 'setBlockReward',
        'block_bonus_per_slot' => 'setBlockBonusPerSlot',
        'endorsement_reward_per_slot' => 'setEndorsementRewardPerSlot',
        'nonce_revelation_reward' => 'setNonceRevelationReward',
        'vdf_revelation_reward' => 'setVdfRevelationReward',
        'quote' => 'setQuote',
        'snapshot_index' => 'setSnapshotIndex',
        'lb_subsidy' => 'setLbSubsidy',
        'total_staking' => 'setTotalStaking',
        'total_delegators' => 'setTotalDelegators',
        'total_delegated' => 'setTotalDelegated',
        'selected_bakers' => 'setSelectedBakers',
        'selected_stake' => 'setSelectedStake',
        'total_rolls' => 'setTotalRolls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'first_level' => 'getFirstLevel',
        'start_time' => 'getStartTime',
        'last_level' => 'getLastLevel',
        'end_time' => 'getEndTime',
        'snapshot_level' => 'getSnapshotLevel',
        'random_seed' => 'getRandomSeed',
        'total_bakers' => 'getTotalBakers',
        'total_baking_power' => 'getTotalBakingPower',
        'block_reward' => 'getBlockReward',
        'block_bonus_per_slot' => 'getBlockBonusPerSlot',
        'endorsement_reward_per_slot' => 'getEndorsementRewardPerSlot',
        'nonce_revelation_reward' => 'getNonceRevelationReward',
        'vdf_revelation_reward' => 'getVdfRevelationReward',
        'quote' => 'getQuote',
        'snapshot_index' => 'getSnapshotIndex',
        'lb_subsidy' => 'getLbSubsidy',
        'total_staking' => 'getTotalStaking',
        'total_delegators' => 'getTotalDelegators',
        'total_delegated' => 'getTotalDelegated',
        'selected_bakers' => 'getSelectedBakers',
        'selected_stake' => 'getSelectedStake',
        'total_rolls' => 'getTotalRolls'
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
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('snapshot_level', $data ?? [], null);
        $this->setIfExists('random_seed', $data ?? [], null);
        $this->setIfExists('total_bakers', $data ?? [], null);
        $this->setIfExists('total_baking_power', $data ?? [], null);
        $this->setIfExists('block_reward', $data ?? [], null);
        $this->setIfExists('block_bonus_per_slot', $data ?? [], null);
        $this->setIfExists('endorsement_reward_per_slot', $data ?? [], null);
        $this->setIfExists('nonce_revelation_reward', $data ?? [], null);
        $this->setIfExists('vdf_revelation_reward', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('snapshot_index', $data ?? [], null);
        $this->setIfExists('lb_subsidy', $data ?? [], null);
        $this->setIfExists('total_staking', $data ?? [], null);
        $this->setIfExists('total_delegators', $data ?? [], null);
        $this->setIfExists('total_delegated', $data ?? [], null);
        $this->setIfExists('selected_bakers', $data ?? [], null);
        $this->setIfExists('selected_stake', $data ?? [], null);
        $this->setIfExists('total_rolls', $data ?? [], null);
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
     * @param int|null $index Cycle index starting from zero
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
     * Gets first_level
     *
     * @return int|null
     */
    public function getFirstLevel()
    {
        return $this->container['first_level'];
    }

    /**
     * Sets first_level
     *
     * @param int|null $first_level Level of the first block in the cycle
     *
     * @return self
     */
    public function setFirstLevel($first_level)
    {

        if (is_null($first_level)) {
            throw new \InvalidArgumentException('non-nullable first_level cannot be null');
        }

        $this->container['first_level'] = $first_level;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time Timestamp of the first block in the cycle
     *
     * @return self
     */
    public function setStartTime($start_time)
    {

        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }

        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets last_level
     *
     * @return int|null
     */
    public function getLastLevel()
    {
        return $this->container['last_level'];
    }

    /**
     * Sets last_level
     *
     * @param int|null $last_level Level of the last block in the cycle
     *
     * @return self
     */
    public function setLastLevel($last_level)
    {

        if (is_null($last_level)) {
            throw new \InvalidArgumentException('non-nullable last_level cannot be null');
        }

        $this->container['last_level'] = $last_level;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time Timestamp of the last block in the cycle
     *
     * @return self
     */
    public function setEndTime($end_time)
    {

        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }

        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets snapshot_level
     *
     * @return int|null
     */
    public function getSnapshotLevel()
    {
        return $this->container['snapshot_level'];
    }

    /**
     * Sets snapshot_level
     *
     * @param int|null $snapshot_level Height of the block where the snapshot was taken
     *
     * @return self
     */
    public function setSnapshotLevel($snapshot_level)
    {

        if (is_null($snapshot_level)) {
            throw new \InvalidArgumentException('non-nullable snapshot_level cannot be null');
        }

        $this->container['snapshot_level'] = $snapshot_level;

        return $this;
    }

    /**
     * Gets random_seed
     *
     * @return string|null
     */
    public function getRandomSeed()
    {
        return $this->container['random_seed'];
    }

    /**
     * Sets random_seed
     *
     * @param string|null $random_seed Randomly generated seed used by the network for things like baking rights distribution etc.
     *
     * @return self
     */
    public function setRandomSeed($random_seed)
    {

        if (is_null($random_seed)) {
            array_push($this->openAPINullablesSetToNull, 'random_seed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('random_seed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['random_seed'] = $random_seed;

        return $this;
    }

    /**
     * Gets total_bakers
     *
     * @return int|null
     */
    public function getTotalBakers()
    {
        return $this->container['total_bakers'];
    }

    /**
     * Sets total_bakers
     *
     * @param int|null $total_bakers Total number of all active in this cycle bakers
     *
     * @return self
     */
    public function setTotalBakers($total_bakers)
    {

        if (is_null($total_bakers)) {
            throw new \InvalidArgumentException('non-nullable total_bakers cannot be null');
        }

        $this->container['total_bakers'] = $total_bakers;

        return $this;
    }

    /**
     * Gets total_baking_power
     *
     * @return int|null
     */
    public function getTotalBakingPower()
    {
        return $this->container['total_baking_power'];
    }

    /**
     * Sets total_baking_power
     *
     * @param int|null $total_baking_power Total baking power of all active in this cycle bakers
     *
     * @return self
     */
    public function setTotalBakingPower($total_baking_power)
    {

        if (is_null($total_baking_power)) {
            throw new \InvalidArgumentException('non-nullable total_baking_power cannot be null');
        }

        $this->container['total_baking_power'] = $total_baking_power;

        return $this;
    }

    /**
     * Gets block_reward
     *
     * @return int|null
     */
    public function getBlockReward()
    {
        return $this->container['block_reward'];
    }

    /**
     * Sets block_reward
     *
     * @param int|null $block_reward Fixed reward paid to the block payload proposer in this cycle (micro tez)
     *
     * @return self
     */
    public function setBlockReward($block_reward)
    {

        if (is_null($block_reward)) {
            throw new \InvalidArgumentException('non-nullable block_reward cannot be null');
        }

        $this->container['block_reward'] = $block_reward;

        return $this;
    }

    /**
     * Gets block_bonus_per_slot
     *
     * @return int|null
     */
    public function getBlockBonusPerSlot()
    {
        return $this->container['block_bonus_per_slot'];
    }

    /**
     * Sets block_bonus_per_slot
     *
     * @param int|null $block_bonus_per_slot Bonus reward paid to the block producer in this cycle (micro tez)
     *
     * @return self
     */
    public function setBlockBonusPerSlot($block_bonus_per_slot)
    {

        if (is_null($block_bonus_per_slot)) {
            throw new \InvalidArgumentException('non-nullable block_bonus_per_slot cannot be null');
        }

        $this->container['block_bonus_per_slot'] = $block_bonus_per_slot;

        return $this;
    }

    /**
     * Gets endorsement_reward_per_slot
     *
     * @return int|null
     */
    public function getEndorsementRewardPerSlot()
    {
        return $this->container['endorsement_reward_per_slot'];
    }

    /**
     * Sets endorsement_reward_per_slot
     *
     * @param int|null $endorsement_reward_per_slot Reward for endorsing in this cycle (micro tez)
     *
     * @return self
     */
    public function setEndorsementRewardPerSlot($endorsement_reward_per_slot)
    {

        if (is_null($endorsement_reward_per_slot)) {
            throw new \InvalidArgumentException('non-nullable endorsement_reward_per_slot cannot be null');
        }

        $this->container['endorsement_reward_per_slot'] = $endorsement_reward_per_slot;

        return $this;
    }

    /**
     * Gets nonce_revelation_reward
     *
     * @return int|null
     */
    public function getNonceRevelationReward()
    {
        return $this->container['nonce_revelation_reward'];
    }

    /**
     * Sets nonce_revelation_reward
     *
     * @param int|null $nonce_revelation_reward Reward for seed nonce revelation in this cycle (micro tez)
     *
     * @return self
     */
    public function setNonceRevelationReward($nonce_revelation_reward)
    {

        if (is_null($nonce_revelation_reward)) {
            throw new \InvalidArgumentException('non-nullable nonce_revelation_reward cannot be null');
        }

        $this->container['nonce_revelation_reward'] = $nonce_revelation_reward;

        return $this;
    }

    /**
     * Gets vdf_revelation_reward
     *
     * @return int|null
     */
    public function getVdfRevelationReward()
    {
        return $this->container['vdf_revelation_reward'];
    }

    /**
     * Sets vdf_revelation_reward
     *
     * @param int|null $vdf_revelation_reward Reward for vdf revelation in this cycle (micro tez)
     *
     * @return self
     */
    public function setVdfRevelationReward($vdf_revelation_reward)
    {

        if (is_null($vdf_revelation_reward)) {
            throw new \InvalidArgumentException('non-nullable vdf_revelation_reward cannot be null');
        }

        $this->container['vdf_revelation_reward'] = $vdf_revelation_reward;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Bzzhh\Tzkt\Model\CycleQuote|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Bzzhh\Tzkt\Model\CycleQuote|null $quote quote
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
     * Gets snapshot_index
     *
     * @return int|null
     */
    public function getSnapshotIndex()
    {
        return $this->container['snapshot_index'];
    }

    /**
     * Sets snapshot_index
     *
     * @param int|null $snapshot_index [DEPRECATED]
     *
     * @return self
     */
    public function setSnapshotIndex($snapshot_index)
    {

        if (is_null($snapshot_index)) {
            throw new \InvalidArgumentException('non-nullable snapshot_index cannot be null');
        }

        $this->container['snapshot_index'] = $snapshot_index;

        return $this;
    }

    /**
     * Gets lb_subsidy
     *
     * @return int|null
     */
    public function getLbSubsidy()
    {
        return $this->container['lb_subsidy'];
    }

    /**
     * Sets lb_subsidy
     *
     * @param int|null $lb_subsidy [DEPRECATED]
     *
     * @return self
     */
    public function setLbSubsidy($lb_subsidy)
    {

        if (is_null($lb_subsidy)) {
            throw new \InvalidArgumentException('non-nullable lb_subsidy cannot be null');
        }

        $this->container['lb_subsidy'] = $lb_subsidy;

        return $this;
    }

    /**
     * Gets total_staking
     *
     * @return int|null
     */
    public function getTotalStaking()
    {
        return $this->container['total_staking'];
    }

    /**
     * Sets total_staking
     *
     * @param int|null $total_staking [DEPRECATED]
     *
     * @return self
     */
    public function setTotalStaking($total_staking)
    {

        if (is_null($total_staking)) {
            throw new \InvalidArgumentException('non-nullable total_staking cannot be null');
        }

        $this->container['total_staking'] = $total_staking;

        return $this;
    }

    /**
     * Gets total_delegators
     *
     * @return int|null
     */
    public function getTotalDelegators()
    {
        return $this->container['total_delegators'];
    }

    /**
     * Sets total_delegators
     *
     * @param int|null $total_delegators [DEPRECATED]
     *
     * @return self
     */
    public function setTotalDelegators($total_delegators)
    {

        if (is_null($total_delegators)) {
            throw new \InvalidArgumentException('non-nullable total_delegators cannot be null');
        }

        $this->container['total_delegators'] = $total_delegators;

        return $this;
    }

    /**
     * Gets total_delegated
     *
     * @return int|null
     */
    public function getTotalDelegated()
    {
        return $this->container['total_delegated'];
    }

    /**
     * Sets total_delegated
     *
     * @param int|null $total_delegated [DEPRECATED]
     *
     * @return self
     */
    public function setTotalDelegated($total_delegated)
    {

        if (is_null($total_delegated)) {
            throw new \InvalidArgumentException('non-nullable total_delegated cannot be null');
        }

        $this->container['total_delegated'] = $total_delegated;

        return $this;
    }

    /**
     * Gets selected_bakers
     *
     * @return int|null
     */
    public function getSelectedBakers()
    {
        return $this->container['selected_bakers'];
    }

    /**
     * Sets selected_bakers
     *
     * @param int|null $selected_bakers [DEPRECATED]
     *
     * @return self
     */
    public function setSelectedBakers($selected_bakers)
    {

        if (is_null($selected_bakers)) {
            throw new \InvalidArgumentException('non-nullable selected_bakers cannot be null');
        }

        $this->container['selected_bakers'] = $selected_bakers;

        return $this;
    }

    /**
     * Gets selected_stake
     *
     * @return int|null
     */
    public function getSelectedStake()
    {
        return $this->container['selected_stake'];
    }

    /**
     * Sets selected_stake
     *
     * @param int|null $selected_stake [DEPRECATED]
     *
     * @return self
     */
    public function setSelectedStake($selected_stake)
    {

        if (is_null($selected_stake)) {
            throw new \InvalidArgumentException('non-nullable selected_stake cannot be null');
        }

        $this->container['selected_stake'] = $selected_stake;

        return $this;
    }

    /**
     * Gets total_rolls
     *
     * @return int|null
     */
    public function getTotalRolls()
    {
        return $this->container['total_rolls'];
    }

    /**
     * Sets total_rolls
     *
     * @param int|null $total_rolls [DEPRECATED]
     *
     * @return self
     */
    public function setTotalRolls($total_rolls)
    {

        if (is_null($total_rolls)) {
            throw new \InvalidArgumentException('non-nullable total_rolls cannot be null');
        }

        $this->container['total_rolls'] = $total_rolls;

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


