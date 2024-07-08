<?php
/**
 * VotingPeriod
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
 * VotingPeriod Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VotingPeriod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VotingPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'epoch' => 'int',
        'first_level' => 'int',
        'start_time' => '\DateTime',
        'last_level' => 'int',
        'end_time' => '\DateTime',
        'kind' => 'string',
        'status' => 'string',
        'dictator' => 'string',
        'total_bakers' => 'int',
        'total_voting_power' => 'int',
        'upvotes_quorum' => 'float',
        'proposals_count' => 'int',
        'top_upvotes' => 'int',
        'top_voting_power' => 'int',
        'ballots_quorum' => 'float',
        'supermajority' => 'float',
        'yay_ballots' => 'int',
        'yay_voting_power' => 'int',
        'nay_ballots' => 'int',
        'nay_voting_power' => 'int',
        'pass_ballots' => 'int',
        'pass_voting_power' => 'int',
        'total_rolls' => 'int',
        'top_rolls' => 'int',
        'yay_rolls' => 'int',
        'nay_rolls' => 'int',
        'pass_rolls' => 'int'
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
        'epoch' => 'int32',
        'first_level' => 'int32',
        'start_time' => 'date-time',
        'last_level' => 'int32',
        'end_time' => 'date-time',
        'kind' => null,
        'status' => null,
        'dictator' => null,
        'total_bakers' => 'int32',
        'total_voting_power' => 'int64',
        'upvotes_quorum' => 'double',
        'proposals_count' => 'int32',
        'top_upvotes' => 'int32',
        'top_voting_power' => 'int64',
        'ballots_quorum' => 'double',
        'supermajority' => 'double',
        'yay_ballots' => 'int32',
        'yay_voting_power' => 'int64',
        'nay_ballots' => 'int32',
        'nay_voting_power' => 'int64',
        'pass_ballots' => 'int32',
        'pass_voting_power' => 'int64',
        'total_rolls' => 'int32',
        'top_rolls' => 'int32',
        'yay_rolls' => 'int32',
        'nay_rolls' => 'int32',
        'pass_rolls' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'index' => false,
		'epoch' => false,
		'first_level' => false,
		'start_time' => false,
		'last_level' => false,
		'end_time' => false,
		'kind' => true,
		'status' => true,
		'dictator' => true,
		'total_bakers' => false,
		'total_voting_power' => false,
		'upvotes_quorum' => true,
		'proposals_count' => true,
		'top_upvotes' => true,
		'top_voting_power' => true,
		'ballots_quorum' => true,
		'supermajority' => true,
		'yay_ballots' => true,
		'yay_voting_power' => true,
		'nay_ballots' => true,
		'nay_voting_power' => true,
		'pass_ballots' => true,
		'pass_voting_power' => true,
		'total_rolls' => false,
		'top_rolls' => true,
		'yay_rolls' => true,
		'nay_rolls' => true,
		'pass_rolls' => true
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
        'epoch' => 'epoch',
        'first_level' => 'firstLevel',
        'start_time' => 'startTime',
        'last_level' => 'lastLevel',
        'end_time' => 'endTime',
        'kind' => 'kind',
        'status' => 'status',
        'dictator' => 'dictator',
        'total_bakers' => 'totalBakers',
        'total_voting_power' => 'totalVotingPower',
        'upvotes_quorum' => 'upvotesQuorum',
        'proposals_count' => 'proposalsCount',
        'top_upvotes' => 'topUpvotes',
        'top_voting_power' => 'topVotingPower',
        'ballots_quorum' => 'ballotsQuorum',
        'supermajority' => 'supermajority',
        'yay_ballots' => 'yayBallots',
        'yay_voting_power' => 'yayVotingPower',
        'nay_ballots' => 'nayBallots',
        'nay_voting_power' => 'nayVotingPower',
        'pass_ballots' => 'passBallots',
        'pass_voting_power' => 'passVotingPower',
        'total_rolls' => 'totalRolls',
        'top_rolls' => 'topRolls',
        'yay_rolls' => 'yayRolls',
        'nay_rolls' => 'nayRolls',
        'pass_rolls' => 'passRolls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'epoch' => 'setEpoch',
        'first_level' => 'setFirstLevel',
        'start_time' => 'setStartTime',
        'last_level' => 'setLastLevel',
        'end_time' => 'setEndTime',
        'kind' => 'setKind',
        'status' => 'setStatus',
        'dictator' => 'setDictator',
        'total_bakers' => 'setTotalBakers',
        'total_voting_power' => 'setTotalVotingPower',
        'upvotes_quorum' => 'setUpvotesQuorum',
        'proposals_count' => 'setProposalsCount',
        'top_upvotes' => 'setTopUpvotes',
        'top_voting_power' => 'setTopVotingPower',
        'ballots_quorum' => 'setBallotsQuorum',
        'supermajority' => 'setSupermajority',
        'yay_ballots' => 'setYayBallots',
        'yay_voting_power' => 'setYayVotingPower',
        'nay_ballots' => 'setNayBallots',
        'nay_voting_power' => 'setNayVotingPower',
        'pass_ballots' => 'setPassBallots',
        'pass_voting_power' => 'setPassVotingPower',
        'total_rolls' => 'setTotalRolls',
        'top_rolls' => 'setTopRolls',
        'yay_rolls' => 'setYayRolls',
        'nay_rolls' => 'setNayRolls',
        'pass_rolls' => 'setPassRolls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'epoch' => 'getEpoch',
        'first_level' => 'getFirstLevel',
        'start_time' => 'getStartTime',
        'last_level' => 'getLastLevel',
        'end_time' => 'getEndTime',
        'kind' => 'getKind',
        'status' => 'getStatus',
        'dictator' => 'getDictator',
        'total_bakers' => 'getTotalBakers',
        'total_voting_power' => 'getTotalVotingPower',
        'upvotes_quorum' => 'getUpvotesQuorum',
        'proposals_count' => 'getProposalsCount',
        'top_upvotes' => 'getTopUpvotes',
        'top_voting_power' => 'getTopVotingPower',
        'ballots_quorum' => 'getBallotsQuorum',
        'supermajority' => 'getSupermajority',
        'yay_ballots' => 'getYayBallots',
        'yay_voting_power' => 'getYayVotingPower',
        'nay_ballots' => 'getNayBallots',
        'nay_voting_power' => 'getNayVotingPower',
        'pass_ballots' => 'getPassBallots',
        'pass_voting_power' => 'getPassVotingPower',
        'total_rolls' => 'getTotalRolls',
        'top_rolls' => 'getTopRolls',
        'yay_rolls' => 'getYayRolls',
        'nay_rolls' => 'getNayRolls',
        'pass_rolls' => 'getPassRolls'
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
        $this->setIfExists('epoch', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('dictator', $data ?? [], null);
        $this->setIfExists('total_bakers', $data ?? [], null);
        $this->setIfExists('total_voting_power', $data ?? [], null);
        $this->setIfExists('upvotes_quorum', $data ?? [], null);
        $this->setIfExists('proposals_count', $data ?? [], null);
        $this->setIfExists('top_upvotes', $data ?? [], null);
        $this->setIfExists('top_voting_power', $data ?? [], null);
        $this->setIfExists('ballots_quorum', $data ?? [], null);
        $this->setIfExists('supermajority', $data ?? [], null);
        $this->setIfExists('yay_ballots', $data ?? [], null);
        $this->setIfExists('yay_voting_power', $data ?? [], null);
        $this->setIfExists('nay_ballots', $data ?? [], null);
        $this->setIfExists('nay_voting_power', $data ?? [], null);
        $this->setIfExists('pass_ballots', $data ?? [], null);
        $this->setIfExists('pass_voting_power', $data ?? [], null);
        $this->setIfExists('total_rolls', $data ?? [], null);
        $this->setIfExists('top_rolls', $data ?? [], null);
        $this->setIfExists('yay_rolls', $data ?? [], null);
        $this->setIfExists('nay_rolls', $data ?? [], null);
        $this->setIfExists('pass_rolls', $data ?? [], null);
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
     * @param int|null $index Index of the voting period, starting from zero
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
     * Gets epoch
     *
     * @return int|null
     */
    public function getEpoch()
    {
        return $this->container['epoch'];
    }

    /**
     * Sets epoch
     *
     * @param int|null $epoch Index of the voting epoch, starting from zero
     *
     * @return self
     */
    public function setEpoch($epoch)
    {

        if (is_null($epoch)) {
            throw new \InvalidArgumentException('non-nullable epoch cannot be null');
        }

        $this->container['epoch'] = $epoch;

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
     * @param int|null $first_level The height of the block in which the period starts
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
     * @param \DateTime|null $start_time The timestamp of the block in which the period starts
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
     * @param int|null $last_level The height of the block in which the period ends
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
     * @param \DateTime|null $end_time The timestamp of the block in which the period ends
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
     * @param string|null $kind Kind of the voting period: `proposal` - delegates can submit protocol amendment proposals using the proposal operation `exploration` -  bakers (delegates) may vote on the top-ranked proposal from the previous Proposal Period using the ballot operation `testing` - If the proposal is approved in the Exploration Period, the testing (or 'cooldown') period begins and bakers start testing the new protocol `promotion` - delegates can cast one vote to promote or not the tested proposal using the ballot operation `adoption` - after the proposal is actually accepted, the ecosystem has some time to prepare to the upgrade
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
     * @param string|null $status Status of the voting period: `active` - means that the voting period is in progress `no_proposals` - means that there were no proposals during the voting period `no_quorum` - means that there was a voting but the quorum was not reached `no_supermajority` - means that there was a voting but the supermajority was not reached `no_single_winner` - means that there were multiple winning proposals with the same voting power `success` - means that the period was finished with positive voting result
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
     * Gets dictator
     *
     * @return string|null
     */
    public function getDictator()
    {
        return $this->container['dictator'];
    }

    /**
     * Sets dictator
     *
     * @param string|null $dictator Status of the governance dictator: `none` - means that there were no actions by the dictator  `abort` - means that the epoch was aborted by the dictator `reset` - means that the period was reset by the dictator `submit` - means that the dictator submitted a proposal
     *
     * @return self
     */
    public function setDictator($dictator)
    {

        if (is_null($dictator)) {
            array_push($this->openAPINullablesSetToNull, 'dictator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dictator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['dictator'] = $dictator;

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
     * @param int|null $total_bakers The number of bakers on the voters list
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
     * Gets total_voting_power
     *
     * @return int|null
     */
    public function getTotalVotingPower()
    {
        return $this->container['total_voting_power'];
    }

    /**
     * Sets total_voting_power
     *
     * @param int|null $total_voting_power Total voting power of bakers on the voters list
     *
     * @return self
     */
    public function setTotalVotingPower($total_voting_power)
    {

        if (is_null($total_voting_power)) {
            throw new \InvalidArgumentException('non-nullable total_voting_power cannot be null');
        }

        $this->container['total_voting_power'] = $total_voting_power;

        return $this;
    }

    /**
     * Gets upvotes_quorum
     *
     * @return float|null
     */
    public function getUpvotesQuorum()
    {
        return $this->container['upvotes_quorum'];
    }

    /**
     * Sets upvotes_quorum
     *
     * @param float|null $upvotes_quorum Upvotes quorum percentage (only for proposal period)
     *
     * @return self
     */
    public function setUpvotesQuorum($upvotes_quorum)
    {

        if (is_null($upvotes_quorum)) {
            array_push($this->openAPINullablesSetToNull, 'upvotes_quorum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('upvotes_quorum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['upvotes_quorum'] = $upvotes_quorum;

        return $this;
    }

    /**
     * Gets proposals_count
     *
     * @return int|null
     */
    public function getProposalsCount()
    {
        return $this->container['proposals_count'];
    }

    /**
     * Sets proposals_count
     *
     * @param int|null $proposals_count The number of proposals injected during the voting period (only for proposal period)
     *
     * @return self
     */
    public function setProposalsCount($proposals_count)
    {

        if (is_null($proposals_count)) {
            array_push($this->openAPINullablesSetToNull, 'proposals_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proposals_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['proposals_count'] = $proposals_count;

        return $this;
    }

    /**
     * Gets top_upvotes
     *
     * @return int|null
     */
    public function getTopUpvotes()
    {
        return $this->container['top_upvotes'];
    }

    /**
     * Sets top_upvotes
     *
     * @param int|null $top_upvotes This is how many upvotes (proposal operations) the most upvoted proposal has (only for proposal period)
     *
     * @return self
     */
    public function setTopUpvotes($top_upvotes)
    {

        if (is_null($top_upvotes)) {
            array_push($this->openAPINullablesSetToNull, 'top_upvotes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_upvotes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['top_upvotes'] = $top_upvotes;

        return $this;
    }

    /**
     * Gets top_voting_power
     *
     * @return int|null
     */
    public function getTopVotingPower()
    {
        return $this->container['top_voting_power'];
    }

    /**
     * Sets top_voting_power
     *
     * @param int|null $top_voting_power This is how much voting power the most upvoted proposal has (only for proposal period)
     *
     * @return self
     */
    public function setTopVotingPower($top_voting_power)
    {

        if (is_null($top_voting_power)) {
            array_push($this->openAPINullablesSetToNull, 'top_voting_power');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_voting_power', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['top_voting_power'] = $top_voting_power;

        return $this;
    }

    /**
     * Gets ballots_quorum
     *
     * @return float|null
     */
    public function getBallotsQuorum()
    {
        return $this->container['ballots_quorum'];
    }

    /**
     * Sets ballots_quorum
     *
     * @param float|null $ballots_quorum Ballots quorum percentage (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setBallotsQuorum($ballots_quorum)
    {

        if (is_null($ballots_quorum)) {
            array_push($this->openAPINullablesSetToNull, 'ballots_quorum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ballots_quorum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ballots_quorum'] = $ballots_quorum;

        return $this;
    }

    /**
     * Gets supermajority
     *
     * @return float|null
     */
    public function getSupermajority()
    {
        return $this->container['supermajority'];
    }

    /**
     * Sets supermajority
     *
     * @param float|null $supermajority Supermajority percentage (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setSupermajority($supermajority)
    {

        if (is_null($supermajority)) {
            array_push($this->openAPINullablesSetToNull, 'supermajority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supermajority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['supermajority'] = $supermajority;

        return $this;
    }

    /**
     * Gets yay_ballots
     *
     * @return int|null
     */
    public function getYayBallots()
    {
        return $this->container['yay_ballots'];
    }

    /**
     * Sets yay_ballots
     *
     * @param int|null $yay_ballots The number of the ballots with \"yay\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setYayBallots($yay_ballots)
    {

        if (is_null($yay_ballots)) {
            array_push($this->openAPINullablesSetToNull, 'yay_ballots');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('yay_ballots', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['yay_ballots'] = $yay_ballots;

        return $this;
    }

    /**
     * Gets yay_voting_power
     *
     * @return int|null
     */
    public function getYayVotingPower()
    {
        return $this->container['yay_voting_power'];
    }

    /**
     * Sets yay_voting_power
     *
     * @param int|null $yay_voting_power Total voting power of the ballots with \"yay\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setYayVotingPower($yay_voting_power)
    {

        if (is_null($yay_voting_power)) {
            array_push($this->openAPINullablesSetToNull, 'yay_voting_power');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('yay_voting_power', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['yay_voting_power'] = $yay_voting_power;

        return $this;
    }

    /**
     * Gets nay_ballots
     *
     * @return int|null
     */
    public function getNayBallots()
    {
        return $this->container['nay_ballots'];
    }

    /**
     * Sets nay_ballots
     *
     * @param int|null $nay_ballots The number of the ballots with \"nay\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setNayBallots($nay_ballots)
    {

        if (is_null($nay_ballots)) {
            array_push($this->openAPINullablesSetToNull, 'nay_ballots');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nay_ballots', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nay_ballots'] = $nay_ballots;

        return $this;
    }

    /**
     * Gets nay_voting_power
     *
     * @return int|null
     */
    public function getNayVotingPower()
    {
        return $this->container['nay_voting_power'];
    }

    /**
     * Sets nay_voting_power
     *
     * @param int|null $nay_voting_power Total voting power of the ballots with \"nay\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setNayVotingPower($nay_voting_power)
    {

        if (is_null($nay_voting_power)) {
            array_push($this->openAPINullablesSetToNull, 'nay_voting_power');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nay_voting_power', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nay_voting_power'] = $nay_voting_power;

        return $this;
    }

    /**
     * Gets pass_ballots
     *
     * @return int|null
     */
    public function getPassBallots()
    {
        return $this->container['pass_ballots'];
    }

    /**
     * Sets pass_ballots
     *
     * @param int|null $pass_ballots The number of the ballots with \"pass\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setPassBallots($pass_ballots)
    {

        if (is_null($pass_ballots)) {
            array_push($this->openAPINullablesSetToNull, 'pass_ballots');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pass_ballots', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pass_ballots'] = $pass_ballots;

        return $this;
    }

    /**
     * Gets pass_voting_power
     *
     * @return int|null
     */
    public function getPassVotingPower()
    {
        return $this->container['pass_voting_power'];
    }

    /**
     * Sets pass_voting_power
     *
     * @param int|null $pass_voting_power Total voting power of the ballots with \"pass\" vote (only for exploration and promotion periods)
     *
     * @return self
     */
    public function setPassVotingPower($pass_voting_power)
    {

        if (is_null($pass_voting_power)) {
            array_push($this->openAPINullablesSetToNull, 'pass_voting_power');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pass_voting_power', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pass_voting_power'] = $pass_voting_power;

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
     * Gets top_rolls
     *
     * @return int|null
     */
    public function getTopRolls()
    {
        return $this->container['top_rolls'];
    }

    /**
     * Sets top_rolls
     *
     * @param int|null $top_rolls [DEPRECATED]
     *
     * @return self
     */
    public function setTopRolls($top_rolls)
    {

        if (is_null($top_rolls)) {
            array_push($this->openAPINullablesSetToNull, 'top_rolls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_rolls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['top_rolls'] = $top_rolls;

        return $this;
    }

    /**
     * Gets yay_rolls
     *
     * @return int|null
     */
    public function getYayRolls()
    {
        return $this->container['yay_rolls'];
    }

    /**
     * Sets yay_rolls
     *
     * @param int|null $yay_rolls [DEPRECATED]
     *
     * @return self
     */
    public function setYayRolls($yay_rolls)
    {

        if (is_null($yay_rolls)) {
            array_push($this->openAPINullablesSetToNull, 'yay_rolls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('yay_rolls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['yay_rolls'] = $yay_rolls;

        return $this;
    }

    /**
     * Gets nay_rolls
     *
     * @return int|null
     */
    public function getNayRolls()
    {
        return $this->container['nay_rolls'];
    }

    /**
     * Sets nay_rolls
     *
     * @param int|null $nay_rolls [DEPRECATED]
     *
     * @return self
     */
    public function setNayRolls($nay_rolls)
    {

        if (is_null($nay_rolls)) {
            array_push($this->openAPINullablesSetToNull, 'nay_rolls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nay_rolls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nay_rolls'] = $nay_rolls;

        return $this;
    }

    /**
     * Gets pass_rolls
     *
     * @return int|null
     */
    public function getPassRolls()
    {
        return $this->container['pass_rolls'];
    }

    /**
     * Sets pass_rolls
     *
     * @param int|null $pass_rolls [DEPRECATED]
     *
     * @return self
     */
    public function setPassRolls($pass_rolls)
    {

        if (is_null($pass_rolls)) {
            array_push($this->openAPINullablesSetToNull, 'pass_rolls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pass_rolls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pass_rolls'] = $pass_rolls;

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


