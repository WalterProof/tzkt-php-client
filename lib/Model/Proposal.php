<?php
/**
 * Proposal
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides a free REST-like API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:  - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io)) - Edo2net: `https://api.edo2net.tzkt.io/` ([view docs](https://api.edo2net.tzkt.io)) - Florencenet: `https://api.florencenet.tzkt.io/` ([view docs](https://api.florencenet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io)) - Edo2net staging: `https://staging.api.edo2net.tzkt.io/` ([view docs](https://staging.api.edo2net.tzkt.io))      Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Email: hello@baking-bad.org - Twitter: https://twitter.com/TezosBakingBad - Telegram: [tg://resolve?domain=baking_bad_chat](tg://resolve?domain=baking_bad_chat) - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you should mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: v1.5
 * Contact: hello@baking-bad.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
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
 * Proposal Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Proposal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Proposal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash' => 'string',
        'initiator' => 'OneOfAlias',
        'first_period' => 'int',
        'last_period' => 'int',
        'epoch' => 'int',
        'upvotes' => 'int',
        'rolls' => 'int',
        'status' => 'string',
        'metadata' => 'OneOfProposalMetadata',
        'period' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hash' => null,
        'initiator' => null,
        'first_period' => 'int32',
        'last_period' => 'int32',
        'epoch' => 'int32',
        'upvotes' => 'int32',
        'rolls' => 'int32',
        'status' => null,
        'metadata' => null,
        'period' => 'int32'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hash' => 'hash',
        'initiator' => 'initiator',
        'first_period' => 'firstPeriod',
        'last_period' => 'lastPeriod',
        'epoch' => 'epoch',
        'upvotes' => 'upvotes',
        'rolls' => 'rolls',
        'status' => 'status',
        'metadata' => 'metadata',
        'period' => 'period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'initiator' => 'setInitiator',
        'first_period' => 'setFirstPeriod',
        'last_period' => 'setLastPeriod',
        'epoch' => 'setEpoch',
        'upvotes' => 'setUpvotes',
        'rolls' => 'setRolls',
        'status' => 'setStatus',
        'metadata' => 'setMetadata',
        'period' => 'setPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'initiator' => 'getInitiator',
        'first_period' => 'getFirstPeriod',
        'last_period' => 'getLastPeriod',
        'epoch' => 'getEpoch',
        'upvotes' => 'getUpvotes',
        'rolls' => 'getRolls',
        'status' => 'getStatus',
        'metadata' => 'getMetadata',
        'period' => 'getPeriod'
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
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['initiator'] = $data['initiator'] ?? null;
        $this->container['first_period'] = $data['first_period'] ?? null;
        $this->container['last_period'] = $data['last_period'] ?? null;
        $this->container['epoch'] = $data['epoch'] ?? null;
        $this->container['upvotes'] = $data['upvotes'] ?? null;
        $this->container['rolls'] = $data['rolls'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
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
     * @param string|null $hash Hash of the proposal, which representing a tarball of concatenated .ml/.mli source files
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

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
     * @param OneOfAlias|null $initiator Information about the baker (delegate) submitted the proposal
     *
     * @return self
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets first_period
     *
     * @return int|null
     */
    public function getFirstPeriod()
    {
        return $this->container['first_period'];
    }

    /**
     * Sets first_period
     *
     * @param int|null $first_period The first voting period where the proposal was active
     *
     * @return self
     */
    public function setFirstPeriod($first_period)
    {
        $this->container['first_period'] = $first_period;

        return $this;
    }

    /**
     * Gets last_period
     *
     * @return int|null
     */
    public function getLastPeriod()
    {
        return $this->container['last_period'];
    }

    /**
     * Sets last_period
     *
     * @param int|null $last_period The last voting period where the proposal was active
     *
     * @return self
     */
    public function setLastPeriod($last_period)
    {
        $this->container['last_period'] = $last_period;

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
     * @param int|null $epoch The voting epoch where the proposal was active
     *
     * @return self
     */
    public function setEpoch($epoch)
    {
        $this->container['epoch'] = $epoch;

        return $this;
    }

    /**
     * Gets upvotes
     *
     * @return int|null
     */
    public function getUpvotes()
    {
        return $this->container['upvotes'];
    }

    /**
     * Sets upvotes
     *
     * @param int|null $upvotes The total number of upvotes (proposal operations)
     *
     * @return self
     */
    public function setUpvotes($upvotes)
    {
        $this->container['upvotes'] = $upvotes;

        return $this;
    }

    /**
     * Gets rolls
     *
     * @return int|null
     */
    public function getRolls()
    {
        return $this->container['rolls'];
    }

    /**
     * Sets rolls
     *
     * @param int|null $rolls The total number of rolls, upvoted the proposal
     *
     * @return self
     */
    public function setRolls($rolls)
    {
        $this->container['rolls'] = $rolls;

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
     * @param string|null $status Status of the proposal `active` - the proposal in the active state `accepted` - the proposal was accepted `rejected` - the proposal was rejected due to too many \"nay\" ballots `skipped` - the proposal was skipped due to the quorum was not reached
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return OneOfProposalMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param OneOfProposalMetadata|null $metadata Information about the proposal
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period **DEPRECATED**. Use `firstPeriod` instead.
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


