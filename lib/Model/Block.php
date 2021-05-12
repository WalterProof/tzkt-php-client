<?php
/**
 * Block
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
 * Block Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Block implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Block';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'level' => 'int',
        'hash' => 'string',
        'timestamp' => '\DateTime',
        'proto' => 'int',
        'priority' => 'int',
        'validations' => 'int',
        'deposit' => 'int',
        'reward' => 'int',
        'fees' => 'int',
        'nonce_revealed' => 'bool',
        'baker' => 'OneOfAlias',
        'software' => 'OneOfSoftwareAlias',
        'endorsements' => '\Bzzhh\Tzkt\Model\EndorsementOperation[]',
        'proposals' => '\Bzzhh\Tzkt\Model\ProposalOperation[]',
        'ballots' => '\Bzzhh\Tzkt\Model\BallotOperation[]',
        'activations' => '\Bzzhh\Tzkt\Model\ActivationOperation[]',
        'double_baking' => '\Bzzhh\Tzkt\Model\DoubleBakingOperation[]',
        'double_endorsing' => '\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]',
        'nonce_revelations' => '\Bzzhh\Tzkt\Model\NonceRevelationOperation[]',
        'delegations' => '\Bzzhh\Tzkt\Model\DelegationOperation[]',
        'originations' => '\Bzzhh\Tzkt\Model\OriginationOperation[]',
        'transactions' => '\Bzzhh\Tzkt\Model\TransactionOperation[]',
        'reveals' => '\Bzzhh\Tzkt\Model\RevealOperation[]',
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
        'level' => 'int32',
        'hash' => null,
        'timestamp' => 'date-time',
        'proto' => 'int32',
        'priority' => 'int32',
        'validations' => 'int32',
        'deposit' => 'int64',
        'reward' => 'int64',
        'fees' => 'int64',
        'nonce_revealed' => null,
        'baker' => null,
        'software' => null,
        'endorsements' => null,
        'proposals' => null,
        'ballots' => null,
        'activations' => null,
        'double_baking' => null,
        'double_endorsing' => null,
        'nonce_revelations' => null,
        'delegations' => null,
        'originations' => null,
        'transactions' => null,
        'reveals' => null,
        'quote' => null
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
        'level' => 'level',
        'hash' => 'hash',
        'timestamp' => 'timestamp',
        'proto' => 'proto',
        'priority' => 'priority',
        'validations' => 'validations',
        'deposit' => 'deposit',
        'reward' => 'reward',
        'fees' => 'fees',
        'nonce_revealed' => 'nonceRevealed',
        'baker' => 'baker',
        'software' => 'software',
        'endorsements' => 'endorsements',
        'proposals' => 'proposals',
        'ballots' => 'ballots',
        'activations' => 'activations',
        'double_baking' => 'doubleBaking',
        'double_endorsing' => 'doubleEndorsing',
        'nonce_revelations' => 'nonceRevelations',
        'delegations' => 'delegations',
        'originations' => 'originations',
        'transactions' => 'transactions',
        'reveals' => 'reveals',
        'quote' => 'quote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level' => 'setLevel',
        'hash' => 'setHash',
        'timestamp' => 'setTimestamp',
        'proto' => 'setProto',
        'priority' => 'setPriority',
        'validations' => 'setValidations',
        'deposit' => 'setDeposit',
        'reward' => 'setReward',
        'fees' => 'setFees',
        'nonce_revealed' => 'setNonceRevealed',
        'baker' => 'setBaker',
        'software' => 'setSoftware',
        'endorsements' => 'setEndorsements',
        'proposals' => 'setProposals',
        'ballots' => 'setBallots',
        'activations' => 'setActivations',
        'double_baking' => 'setDoubleBaking',
        'double_endorsing' => 'setDoubleEndorsing',
        'nonce_revelations' => 'setNonceRevelations',
        'delegations' => 'setDelegations',
        'originations' => 'setOriginations',
        'transactions' => 'setTransactions',
        'reveals' => 'setReveals',
        'quote' => 'setQuote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level' => 'getLevel',
        'hash' => 'getHash',
        'timestamp' => 'getTimestamp',
        'proto' => 'getProto',
        'priority' => 'getPriority',
        'validations' => 'getValidations',
        'deposit' => 'getDeposit',
        'reward' => 'getReward',
        'fees' => 'getFees',
        'nonce_revealed' => 'getNonceRevealed',
        'baker' => 'getBaker',
        'software' => 'getSoftware',
        'endorsements' => 'getEndorsements',
        'proposals' => 'getProposals',
        'ballots' => 'getBallots',
        'activations' => 'getActivations',
        'double_baking' => 'getDoubleBaking',
        'double_endorsing' => 'getDoubleEndorsing',
        'nonce_revelations' => 'getNonceRevelations',
        'delegations' => 'getDelegations',
        'originations' => 'getOriginations',
        'transactions' => 'getTransactions',
        'reveals' => 'getReveals',
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
        $this->container['level'] = $data['level'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['proto'] = $data['proto'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['validations'] = $data['validations'] ?? null;
        $this->container['deposit'] = $data['deposit'] ?? null;
        $this->container['reward'] = $data['reward'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['nonce_revealed'] = $data['nonce_revealed'] ?? null;
        $this->container['baker'] = $data['baker'] ?? null;
        $this->container['software'] = $data['software'] ?? null;
        $this->container['endorsements'] = $data['endorsements'] ?? null;
        $this->container['proposals'] = $data['proposals'] ?? null;
        $this->container['ballots'] = $data['ballots'] ?? null;
        $this->container['activations'] = $data['activations'] ?? null;
        $this->container['double_baking'] = $data['double_baking'] ?? null;
        $this->container['double_endorsing'] = $data['double_endorsing'] ?? null;
        $this->container['nonce_revelations'] = $data['nonce_revelations'] ?? null;
        $this->container['delegations'] = $data['delegations'] ?? null;
        $this->container['originations'] = $data['originations'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['reveals'] = $data['reveals'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
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
     * @param int|null $level The height of the block from the genesis block
     *
     * @return self
     */
    public function setLevel($level)
    {
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
        $this->container['hash'] = $hash;

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
     * @param \DateTime|null $timestamp The datetime at which the block is claimed to have been created (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets proto
     *
     * @return int|null
     */
    public function getProto()
    {
        return $this->container['proto'];
    }

    /**
     * Sets proto
     *
     * @param int|null $proto Protocol code, representing a number of protocol changes since genesis (mod 256, but `-1` for the genesis block)
     *
     * @return self
     */
    public function setProto($proto)
    {
        $this->container['proto'] = $proto;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority The position in the priority list of delegates at which the block was baked
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets validations
     *
     * @return int|null
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param int|null $validations Number of endorsements, confirmed the block
     *
     * @return self
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return int|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param int|null $deposit Security deposit frozen on the baker's account for producing the block (micro tez)
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return int|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param int|null $reward Reward of the baker for producing the block (micro tez)
     *
     * @return self
     */
    public function setReward($reward)
    {
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return int|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param int|null $fees Total fee paid by all operations, included in the block
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets nonce_revealed
     *
     * @return bool|null
     */
    public function getNonceRevealed()
    {
        return $this->container['nonce_revealed'];
    }

    /**
     * Sets nonce_revealed
     *
     * @param bool|null $nonce_revealed Status of the seed nonce revelation `true` - seed nonce revealed `false` - there's no `seed_nonce_hash` in the block or seed nonce revelation has missed
     *
     * @return self
     */
    public function setNonceRevealed($nonce_revealed)
    {
        $this->container['nonce_revealed'] = $nonce_revealed;

        return $this;
    }

    /**
     * Gets baker
     *
     * @return OneOfAlias|null
     */
    public function getBaker()
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param OneOfAlias|null $baker Information about a delegate (baker), produced the block
     *
     * @return self
     */
    public function setBaker($baker)
    {
        $this->container['baker'] = $baker;

        return $this;
    }

    /**
     * Gets software
     *
     * @return OneOfSoftwareAlias|null
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param OneOfSoftwareAlias|null $software Information about baker's software
     *
     * @return self
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets endorsements
     *
     * @return \Bzzhh\Tzkt\Model\EndorsementOperation[]|null
     */
    public function getEndorsements()
    {
        return $this->container['endorsements'];
    }

    /**
     * Sets endorsements
     *
     * @param \Bzzhh\Tzkt\Model\EndorsementOperation[]|null $endorsements List of endorsement (is operation, which specifies the head of the chain as seen by the endorser of a given slot) operations, included in the block
     *
     * @return self
     */
    public function setEndorsements($endorsements)
    {
        $this->container['endorsements'] = $endorsements;

        return $this;
    }

    /**
     * Gets proposals
     *
     * @return \Bzzhh\Tzkt\Model\ProposalOperation[]|null
     */
    public function getProposals()
    {
        return $this->container['proposals'];
    }

    /**
     * Sets proposals
     *
     * @param \Bzzhh\Tzkt\Model\ProposalOperation[]|null $proposals List of proposal (is used by bakers (delegates) to submit and/or upvote proposals to amend the protocol) operations, included in the block
     *
     * @return self
     */
    public function setProposals($proposals)
    {
        $this->container['proposals'] = $proposals;

        return $this;
    }

    /**
     * Gets ballots
     *
     * @return \Bzzhh\Tzkt\Model\BallotOperation[]|null
     */
    public function getBallots()
    {
        return $this->container['ballots'];
    }

    /**
     * Sets ballots
     *
     * @param \Bzzhh\Tzkt\Model\BallotOperation[]|null $ballots List of ballot (is used to vote for a proposal in a given voting cycle) operations, included in the block
     *
     * @return self
     */
    public function setBallots($ballots)
    {
        $this->container['ballots'] = $ballots;

        return $this;
    }

    /**
     * Gets activations
     *
     * @return \Bzzhh\Tzkt\Model\ActivationOperation[]|null
     */
    public function getActivations()
    {
        return $this->container['activations'];
    }

    /**
     * Sets activations
     *
     * @param \Bzzhh\Tzkt\Model\ActivationOperation[]|null $activations List of activation (is used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser) operations, included in the block
     *
     * @return self
     */
    public function setActivations($activations)
    {
        $this->container['activations'] = $activations;

        return $this;
    }

    /**
     * Gets double_baking
     *
     * @return \Bzzhh\Tzkt\Model\DoubleBakingOperation[]|null
     */
    public function getDoubleBaking()
    {
        return $this->container['double_baking'];
    }

    /**
     * Sets double_baking
     *
     * @param \Bzzhh\Tzkt\Model\DoubleBakingOperation[]|null $double_baking List of double baking evidence (is used by bakers to provide evidence of double baking (baking two different blocks at the same height) by a baker) operations, included in the block
     *
     * @return self
     */
    public function setDoubleBaking($double_baking)
    {
        $this->container['double_baking'] = $double_baking;

        return $this;
    }

    /**
     * Gets double_endorsing
     *
     * @return \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]|null
     */
    public function getDoubleEndorsing()
    {
        return $this->container['double_endorsing'];
    }

    /**
     * Sets double_endorsing
     *
     * @param \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]|null $double_endorsing List of double endorsement evidence (is used by bakers to provide evidence of double endorsement (endorsing two different blocks at the same block height) by a baker) operations, included in the block
     *
     * @return self
     */
    public function setDoubleEndorsing($double_endorsing)
    {
        $this->container['double_endorsing'] = $double_endorsing;

        return $this;
    }

    /**
     * Gets nonce_revelations
     *
     * @return \Bzzhh\Tzkt\Model\NonceRevelationOperation[]|null
     */
    public function getNonceRevelations()
    {
        return $this->container['nonce_revelations'];
    }

    /**
     * Sets nonce_revelations
     *
     * @param \Bzzhh\Tzkt\Model\NonceRevelationOperation[]|null $nonce_revelations List of nonce revelation (are used by the blockchain to create randomness) operations, included in the block
     *
     * @return self
     */
    public function setNonceRevelations($nonce_revelations)
    {
        $this->container['nonce_revelations'] = $nonce_revelations;

        return $this;
    }

    /**
     * Gets delegations
     *
     * @return \Bzzhh\Tzkt\Model\DelegationOperation[]|null
     */
    public function getDelegations()
    {
        return $this->container['delegations'];
    }

    /**
     * Sets delegations
     *
     * @param \Bzzhh\Tzkt\Model\DelegationOperation[]|null $delegations List of delegation (is used to delegate funds to a delegate (an implicit account registered as a baker)) operations, included in the block
     *
     * @return self
     */
    public function setDelegations($delegations)
    {
        $this->container['delegations'] = $delegations;

        return $this;
    }

    /**
     * Gets originations
     *
     * @return \Bzzhh\Tzkt\Model\OriginationOperation[]|null
     */
    public function getOriginations()
    {
        return $this->container['originations'];
    }

    /**
     * Sets originations
     *
     * @param \Bzzhh\Tzkt\Model\OriginationOperation[]|null $originations List of origination (deployment / contract creation ) operations, included in the block
     *
     * @return self
     */
    public function setOriginations($originations)
    {
        $this->container['originations'] = $originations;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Bzzhh\Tzkt\Model\TransactionOperation[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Bzzhh\Tzkt\Model\TransactionOperation[]|null $transactions List of transaction (is a standard operation used to transfer tezos tokens to an account) operations, included in the block
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets reveals
     *
     * @return \Bzzhh\Tzkt\Model\RevealOperation[]|null
     */
    public function getReveals()
    {
        return $this->container['reveals'];
    }

    /**
     * Sets reveals
     *
     * @param \Bzzhh\Tzkt\Model\RevealOperation[]|null $reveals List of reveal (is used to reveal the public key associated with an account) operations, included in the block
     *
     * @return self
     */
    public function setReveals($reveals)
    {
        $this->container['reveals'] = $reveals;

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
     * @param OneOfQuoteShort|null $quote Injected historical quote at the time of block
     *
     * @return self
     */
    public function setQuote($quote)
    {
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


