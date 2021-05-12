<?php
/**
 * Int32Parameter
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
 * Int32Parameter Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Int32Parameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Int32Parameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eq' => 'int',
        'ne' => 'int',
        'gt' => 'int',
        'ge' => 'int',
        'lt' => 'int',
        'le' => 'int',
        'in' => 'int[]',
        'ni' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eq' => 'int32',
        'ne' => 'int32',
        'gt' => 'int32',
        'ge' => 'int32',
        'lt' => 'int32',
        'le' => 'int32',
        'in' => 'int32',
        'ni' => 'int32'
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
        'eq' => 'eq',
        'ne' => 'ne',
        'gt' => 'gt',
        'ge' => 'ge',
        'lt' => 'lt',
        'le' => 'le',
        'in' => 'in',
        'ni' => 'ni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eq' => 'setEq',
        'ne' => 'setNe',
        'gt' => 'setGt',
        'ge' => 'setGe',
        'lt' => 'setLt',
        'le' => 'setLe',
        'in' => 'setIn',
        'ni' => 'setNi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eq' => 'getEq',
        'ne' => 'getNe',
        'gt' => 'getGt',
        'ge' => 'getGe',
        'lt' => 'getLt',
        'le' => 'getLe',
        'in' => 'getIn',
        'ni' => 'getNi'
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
        $this->container['eq'] = $data['eq'] ?? null;
        $this->container['ne'] = $data['ne'] ?? null;
        $this->container['gt'] = $data['gt'] ?? null;
        $this->container['ge'] = $data['ge'] ?? null;
        $this->container['lt'] = $data['lt'] ?? null;
        $this->container['le'] = $data['le'] ?? null;
        $this->container['in'] = $data['in'] ?? null;
        $this->container['ni'] = $data['ni'] ?? null;
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
     * Gets eq
     *
     * @return int|null
     */
    public function getEq()
    {
        return $this->container['eq'];
    }

    /**
     * Sets eq
     *
     * @param int|null $eq **Equal** filter mode (optional, i.e. `param.eq=123` is the same as `param=123`). \\ Specify an integer number to get items where the specified field is equal to the specified value.  Example: `?balance=1234`.
     *
     * @return self
     */
    public function setEq($eq)
    {
        $this->container['eq'] = $eq;

        return $this;
    }

    /**
     * Gets ne
     *
     * @return int|null
     */
    public function getNe()
    {
        return $this->container['ne'];
    }

    /**
     * Sets ne
     *
     * @param int|null $ne **Not equal** filter mode. \\ Specify an integer number to get items where the specified field is not equal to the specified value.  Example: `?balance.ne=1234`.
     *
     * @return self
     */
    public function setNe($ne)
    {
        $this->container['ne'] = $ne;

        return $this;
    }

    /**
     * Gets gt
     *
     * @return int|null
     */
    public function getGt()
    {
        return $this->container['gt'];
    }

    /**
     * Sets gt
     *
     * @param int|null $gt **Greater than** filter mode. \\ Specify an integer number to get items where the specified field is greater than the specified value.  Example: `?balance.gt=1234`.
     *
     * @return self
     */
    public function setGt($gt)
    {
        $this->container['gt'] = $gt;

        return $this;
    }

    /**
     * Gets ge
     *
     * @return int|null
     */
    public function getGe()
    {
        return $this->container['ge'];
    }

    /**
     * Sets ge
     *
     * @param int|null $ge **Greater or equal** filter mode. \\ Specify an integer number to get items where the specified field is greater than equal to the specified value.  Example: `?balance.ge=1234`.
     *
     * @return self
     */
    public function setGe($ge)
    {
        $this->container['ge'] = $ge;

        return $this;
    }

    /**
     * Gets lt
     *
     * @return int|null
     */
    public function getLt()
    {
        return $this->container['lt'];
    }

    /**
     * Sets lt
     *
     * @param int|null $lt **Less than** filter mode. \\ Specify an integer number to get items where the specified field is less than the specified value.  Example: `?balance.lt=1234`.
     *
     * @return self
     */
    public function setLt($lt)
    {
        $this->container['lt'] = $lt;

        return $this;
    }

    /**
     * Gets le
     *
     * @return int|null
     */
    public function getLe()
    {
        return $this->container['le'];
    }

    /**
     * Sets le
     *
     * @param int|null $le **Less or equal** filter mode. \\ Specify an integer number to get items where the specified field is less than or equal to the specified value.  Example: `?balance.le=1234`.
     *
     * @return self
     */
    public function setLe($le)
    {
        $this->container['le'] = $le;

        return $this;
    }

    /**
     * Gets in
     *
     * @return int[]|null
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param int[]|null $in **In list** (any of) filter mode. \\ Specify a comma-separated list of integers to get items where the specified field is equal to one of the specified values.  Example: `?level.in=12,14,52,69`.
     *
     * @return self
     */
    public function setIn($in)
    {
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets ni
     *
     * @return int[]|null
     */
    public function getNi()
    {
        return $this->container['ni'];
    }

    /**
     * Sets ni
     *
     * @param int[]|null $ni **Not in list** (none of) filter mode. \\ Specify a comma-separated list of integers to get items where the specified field is not equal to all the specified values.  Example: `?level.ni=12,14,52,69`.
     *
     * @return self
     */
    public function setNi($ni)
    {
        $this->container['ni'] = $ni;

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


