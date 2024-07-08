<?php
/**
 * UserAllOf
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
 * UserAllOf Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'type' => 'string',
        'address' => 'string',
        'alias' => 'string',
        'public_key' => 'string',
        'revealed' => 'bool',
        'balance' => 'int',
        'rollup_bonds' => 'int',
        'smart_rollup_bonds' => 'int',
        'staked_balance' => 'int',
        'staked_pseudotokens' => 'string',
        'unstaked_balance' => 'int',
        'unstaked_baker' => 'OneOfAlias',
        'counter' => 'int',
        'delegate' => 'OneOfDelegateInfo',
        'delegation_level' => 'int',
        'delegation_time' => '\DateTime',
        'num_contracts' => 'int',
        'rollups_count' => 'int',
        'smart_rollups_count' => 'int',
        'active_tokens_count' => 'int',
        'token_balances_count' => 'int',
        'token_transfers_count' => 'int',
        'active_tickets_count' => 'int',
        'ticket_balances_count' => 'int',
        'ticket_transfers_count' => 'int',
        'num_activations' => 'int',
        'num_delegations' => 'int',
        'num_originations' => 'int',
        'num_transactions' => 'int',
        'num_reveals' => 'int',
        'num_register_constants' => 'int',
        'num_set_deposits_limits' => 'int',
        'num_migrations' => 'int',
        'tx_rollup_origination_count' => 'int',
        'tx_rollup_submit_batch_count' => 'int',
        'tx_rollup_commit_count' => 'int',
        'tx_rollup_return_bond_count' => 'int',
        'tx_rollup_finalize_commitment_count' => 'int',
        'tx_rollup_remove_commitment_count' => 'int',
        'tx_rollup_rejection_count' => 'int',
        'tx_rollup_dispatch_tickets_count' => 'int',
        'transfer_ticket_count' => 'int',
        'increase_paid_storage_count' => 'int',
        'drain_delegate_count' => 'int',
        'smart_rollup_add_messages_count' => 'int',
        'smart_rollup_cement_count' => 'int',
        'smart_rollup_execute_count' => 'int',
        'smart_rollup_originate_count' => 'int',
        'smart_rollup_publish_count' => 'int',
        'smart_rollup_recover_bond_count' => 'int',
        'smart_rollup_refute_count' => 'int',
        'refutation_games_count' => 'int',
        'active_refutation_games_count' => 'int',
        'staking_ops_count' => 'int',
        'staking_updates_count' => 'int',
        'set_delegate_parameters_ops_count' => 'int',
        'dal_publish_commitment_ops_count' => 'int',
        'first_activity' => 'int',
        'first_activity_time' => '\DateTime',
        'last_activity' => 'int',
        'last_activity_time' => '\DateTime',
        'extras' => 'mixed',
        'metadata' => 'mixed',
        'lost_balance' => 'int'
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
        'alias' => null,
        'public_key' => null,
        'revealed' => null,
        'balance' => 'int64',
        'rollup_bonds' => 'int64',
        'smart_rollup_bonds' => 'int64',
        'staked_balance' => 'int64',
        'staked_pseudotokens' => null,
        'unstaked_balance' => 'int64',
        'unstaked_baker' => null,
        'counter' => 'int32',
        'delegate' => null,
        'delegation_level' => 'int32',
        'delegation_time' => 'date-time',
        'num_contracts' => 'int32',
        'rollups_count' => 'int32',
        'smart_rollups_count' => 'int32',
        'active_tokens_count' => 'int32',
        'token_balances_count' => 'int32',
        'token_transfers_count' => 'int32',
        'active_tickets_count' => 'int32',
        'ticket_balances_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'num_activations' => 'int32',
        'num_delegations' => 'int32',
        'num_originations' => 'int32',
        'num_transactions' => 'int32',
        'num_reveals' => 'int32',
        'num_register_constants' => 'int32',
        'num_set_deposits_limits' => 'int32',
        'num_migrations' => 'int32',
        'tx_rollup_origination_count' => 'int32',
        'tx_rollup_submit_batch_count' => 'int32',
        'tx_rollup_commit_count' => 'int32',
        'tx_rollup_return_bond_count' => 'int32',
        'tx_rollup_finalize_commitment_count' => 'int32',
        'tx_rollup_remove_commitment_count' => 'int32',
        'tx_rollup_rejection_count' => 'int32',
        'tx_rollup_dispatch_tickets_count' => 'int32',
        'transfer_ticket_count' => 'int32',
        'increase_paid_storage_count' => 'int32',
        'drain_delegate_count' => 'int32',
        'smart_rollup_add_messages_count' => 'int32',
        'smart_rollup_cement_count' => 'int32',
        'smart_rollup_execute_count' => 'int32',
        'smart_rollup_originate_count' => 'int32',
        'smart_rollup_publish_count' => 'int32',
        'smart_rollup_recover_bond_count' => 'int32',
        'smart_rollup_refute_count' => 'int32',
        'refutation_games_count' => 'int32',
        'active_refutation_games_count' => 'int32',
        'staking_ops_count' => 'int32',
        'staking_updates_count' => 'int32',
        'set_delegate_parameters_ops_count' => 'int32',
        'dal_publish_commitment_ops_count' => 'int32',
        'first_activity' => 'int32',
        'first_activity_time' => 'date-time',
        'last_activity' => 'int32',
        'last_activity_time' => 'date-time',
        'extras' => null,
        'metadata' => null,
        'lost_balance' => 'int64'
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
		'alias' => true,
		'public_key' => true,
		'revealed' => false,
		'balance' => false,
		'rollup_bonds' => false,
		'smart_rollup_bonds' => false,
		'staked_balance' => false,
		'staked_pseudotokens' => true,
		'unstaked_balance' => false,
		'unstaked_baker' => true,
		'counter' => false,
		'delegate' => true,
		'delegation_level' => true,
		'delegation_time' => true,
		'num_contracts' => false,
		'rollups_count' => false,
		'smart_rollups_count' => false,
		'active_tokens_count' => false,
		'token_balances_count' => false,
		'token_transfers_count' => false,
		'active_tickets_count' => false,
		'ticket_balances_count' => false,
		'ticket_transfers_count' => false,
		'num_activations' => false,
		'num_delegations' => false,
		'num_originations' => false,
		'num_transactions' => false,
		'num_reveals' => false,
		'num_register_constants' => false,
		'num_set_deposits_limits' => false,
		'num_migrations' => false,
		'tx_rollup_origination_count' => false,
		'tx_rollup_submit_batch_count' => false,
		'tx_rollup_commit_count' => false,
		'tx_rollup_return_bond_count' => false,
		'tx_rollup_finalize_commitment_count' => false,
		'tx_rollup_remove_commitment_count' => false,
		'tx_rollup_rejection_count' => false,
		'tx_rollup_dispatch_tickets_count' => false,
		'transfer_ticket_count' => false,
		'increase_paid_storage_count' => false,
		'drain_delegate_count' => false,
		'smart_rollup_add_messages_count' => false,
		'smart_rollup_cement_count' => false,
		'smart_rollup_execute_count' => false,
		'smart_rollup_originate_count' => false,
		'smart_rollup_publish_count' => false,
		'smart_rollup_recover_bond_count' => false,
		'smart_rollup_refute_count' => false,
		'refutation_games_count' => false,
		'active_refutation_games_count' => false,
		'staking_ops_count' => false,
		'staking_updates_count' => false,
		'set_delegate_parameters_ops_count' => false,
		'dal_publish_commitment_ops_count' => false,
		'first_activity' => true,
		'first_activity_time' => true,
		'last_activity' => true,
		'last_activity_time' => true,
		'extras' => true,
		'metadata' => true,
		'lost_balance' => false
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
        'alias' => 'alias',
        'public_key' => 'publicKey',
        'revealed' => 'revealed',
        'balance' => 'balance',
        'rollup_bonds' => 'rollupBonds',
        'smart_rollup_bonds' => 'smartRollupBonds',
        'staked_balance' => 'stakedBalance',
        'staked_pseudotokens' => 'stakedPseudotokens',
        'unstaked_balance' => 'unstakedBalance',
        'unstaked_baker' => 'unstakedBaker',
        'counter' => 'counter',
        'delegate' => 'delegate',
        'delegation_level' => 'delegationLevel',
        'delegation_time' => 'delegationTime',
        'num_contracts' => 'numContracts',
        'rollups_count' => 'rollupsCount',
        'smart_rollups_count' => 'smartRollupsCount',
        'active_tokens_count' => 'activeTokensCount',
        'token_balances_count' => 'tokenBalancesCount',
        'token_transfers_count' => 'tokenTransfersCount',
        'active_tickets_count' => 'activeTicketsCount',
        'ticket_balances_count' => 'ticketBalancesCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'num_activations' => 'numActivations',
        'num_delegations' => 'numDelegations',
        'num_originations' => 'numOriginations',
        'num_transactions' => 'numTransactions',
        'num_reveals' => 'numReveals',
        'num_register_constants' => 'numRegisterConstants',
        'num_set_deposits_limits' => 'numSetDepositsLimits',
        'num_migrations' => 'numMigrations',
        'tx_rollup_origination_count' => 'txRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'txRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'txRollupCommitCount',
        'tx_rollup_return_bond_count' => 'txRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'txRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'txRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'txRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'txRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'transferTicketCount',
        'increase_paid_storage_count' => 'increasePaidStorageCount',
        'drain_delegate_count' => 'drainDelegateCount',
        'smart_rollup_add_messages_count' => 'smartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'smartRollupCementCount',
        'smart_rollup_execute_count' => 'smartRollupExecuteCount',
        'smart_rollup_originate_count' => 'smartRollupOriginateCount',
        'smart_rollup_publish_count' => 'smartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'smartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'smartRollupRefuteCount',
        'refutation_games_count' => 'refutationGamesCount',
        'active_refutation_games_count' => 'activeRefutationGamesCount',
        'staking_ops_count' => 'stakingOpsCount',
        'staking_updates_count' => 'stakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'setDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'dalPublishCommitmentOpsCount',
        'first_activity' => 'firstActivity',
        'first_activity_time' => 'firstActivityTime',
        'last_activity' => 'lastActivity',
        'last_activity_time' => 'lastActivityTime',
        'extras' => 'extras',
        'metadata' => 'metadata',
        'lost_balance' => 'lostBalance'
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
        'alias' => 'setAlias',
        'public_key' => 'setPublicKey',
        'revealed' => 'setRevealed',
        'balance' => 'setBalance',
        'rollup_bonds' => 'setRollupBonds',
        'smart_rollup_bonds' => 'setSmartRollupBonds',
        'staked_balance' => 'setStakedBalance',
        'staked_pseudotokens' => 'setStakedPseudotokens',
        'unstaked_balance' => 'setUnstakedBalance',
        'unstaked_baker' => 'setUnstakedBaker',
        'counter' => 'setCounter',
        'delegate' => 'setDelegate',
        'delegation_level' => 'setDelegationLevel',
        'delegation_time' => 'setDelegationTime',
        'num_contracts' => 'setNumContracts',
        'rollups_count' => 'setRollupsCount',
        'smart_rollups_count' => 'setSmartRollupsCount',
        'active_tokens_count' => 'setActiveTokensCount',
        'token_balances_count' => 'setTokenBalancesCount',
        'token_transfers_count' => 'setTokenTransfersCount',
        'active_tickets_count' => 'setActiveTicketsCount',
        'ticket_balances_count' => 'setTicketBalancesCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'num_activations' => 'setNumActivations',
        'num_delegations' => 'setNumDelegations',
        'num_originations' => 'setNumOriginations',
        'num_transactions' => 'setNumTransactions',
        'num_reveals' => 'setNumReveals',
        'num_register_constants' => 'setNumRegisterConstants',
        'num_set_deposits_limits' => 'setNumSetDepositsLimits',
        'num_migrations' => 'setNumMigrations',
        'tx_rollup_origination_count' => 'setTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'setTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'setTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'setTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'setTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'setTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'setTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'setTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'setTransferTicketCount',
        'increase_paid_storage_count' => 'setIncreasePaidStorageCount',
        'drain_delegate_count' => 'setDrainDelegateCount',
        'smart_rollup_add_messages_count' => 'setSmartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'setSmartRollupCementCount',
        'smart_rollup_execute_count' => 'setSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'setSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'setSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'setSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'setSmartRollupRefuteCount',
        'refutation_games_count' => 'setRefutationGamesCount',
        'active_refutation_games_count' => 'setActiveRefutationGamesCount',
        'staking_ops_count' => 'setStakingOpsCount',
        'staking_updates_count' => 'setStakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'setSetDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'setDalPublishCommitmentOpsCount',
        'first_activity' => 'setFirstActivity',
        'first_activity_time' => 'setFirstActivityTime',
        'last_activity' => 'setLastActivity',
        'last_activity_time' => 'setLastActivityTime',
        'extras' => 'setExtras',
        'metadata' => 'setMetadata',
        'lost_balance' => 'setLostBalance'
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
        'alias' => 'getAlias',
        'public_key' => 'getPublicKey',
        'revealed' => 'getRevealed',
        'balance' => 'getBalance',
        'rollup_bonds' => 'getRollupBonds',
        'smart_rollup_bonds' => 'getSmartRollupBonds',
        'staked_balance' => 'getStakedBalance',
        'staked_pseudotokens' => 'getStakedPseudotokens',
        'unstaked_balance' => 'getUnstakedBalance',
        'unstaked_baker' => 'getUnstakedBaker',
        'counter' => 'getCounter',
        'delegate' => 'getDelegate',
        'delegation_level' => 'getDelegationLevel',
        'delegation_time' => 'getDelegationTime',
        'num_contracts' => 'getNumContracts',
        'rollups_count' => 'getRollupsCount',
        'smart_rollups_count' => 'getSmartRollupsCount',
        'active_tokens_count' => 'getActiveTokensCount',
        'token_balances_count' => 'getTokenBalancesCount',
        'token_transfers_count' => 'getTokenTransfersCount',
        'active_tickets_count' => 'getActiveTicketsCount',
        'ticket_balances_count' => 'getTicketBalancesCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'num_activations' => 'getNumActivations',
        'num_delegations' => 'getNumDelegations',
        'num_originations' => 'getNumOriginations',
        'num_transactions' => 'getNumTransactions',
        'num_reveals' => 'getNumReveals',
        'num_register_constants' => 'getNumRegisterConstants',
        'num_set_deposits_limits' => 'getNumSetDepositsLimits',
        'num_migrations' => 'getNumMigrations',
        'tx_rollup_origination_count' => 'getTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'getTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'getTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'getTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'getTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'getTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'getTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'getTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'getTransferTicketCount',
        'increase_paid_storage_count' => 'getIncreasePaidStorageCount',
        'drain_delegate_count' => 'getDrainDelegateCount',
        'smart_rollup_add_messages_count' => 'getSmartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'getSmartRollupCementCount',
        'smart_rollup_execute_count' => 'getSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'getSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'getSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'getSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'getSmartRollupRefuteCount',
        'refutation_games_count' => 'getRefutationGamesCount',
        'active_refutation_games_count' => 'getActiveRefutationGamesCount',
        'staking_ops_count' => 'getStakingOpsCount',
        'staking_updates_count' => 'getStakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'getSetDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'getDalPublishCommitmentOpsCount',
        'first_activity' => 'getFirstActivity',
        'first_activity_time' => 'getFirstActivityTime',
        'last_activity' => 'getLastActivity',
        'last_activity_time' => 'getLastActivityTime',
        'extras' => 'getExtras',
        'metadata' => 'getMetadata',
        'lost_balance' => 'getLostBalance'
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
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('public_key', $data ?? [], null);
        $this->setIfExists('revealed', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('rollup_bonds', $data ?? [], null);
        $this->setIfExists('smart_rollup_bonds', $data ?? [], null);
        $this->setIfExists('staked_balance', $data ?? [], null);
        $this->setIfExists('staked_pseudotokens', $data ?? [], null);
        $this->setIfExists('unstaked_balance', $data ?? [], null);
        $this->setIfExists('unstaked_baker', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('delegate', $data ?? [], null);
        $this->setIfExists('delegation_level', $data ?? [], null);
        $this->setIfExists('delegation_time', $data ?? [], null);
        $this->setIfExists('num_contracts', $data ?? [], null);
        $this->setIfExists('rollups_count', $data ?? [], null);
        $this->setIfExists('smart_rollups_count', $data ?? [], null);
        $this->setIfExists('active_tokens_count', $data ?? [], null);
        $this->setIfExists('token_balances_count', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('active_tickets_count', $data ?? [], null);
        $this->setIfExists('ticket_balances_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('num_activations', $data ?? [], null);
        $this->setIfExists('num_delegations', $data ?? [], null);
        $this->setIfExists('num_originations', $data ?? [], null);
        $this->setIfExists('num_transactions', $data ?? [], null);
        $this->setIfExists('num_reveals', $data ?? [], null);
        $this->setIfExists('num_register_constants', $data ?? [], null);
        $this->setIfExists('num_set_deposits_limits', $data ?? [], null);
        $this->setIfExists('num_migrations', $data ?? [], null);
        $this->setIfExists('tx_rollup_origination_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_submit_batch_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_commit_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_return_bond_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_finalize_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_remove_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_rejection_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_dispatch_tickets_count', $data ?? [], null);
        $this->setIfExists('transfer_ticket_count', $data ?? [], null);
        $this->setIfExists('increase_paid_storage_count', $data ?? [], null);
        $this->setIfExists('drain_delegate_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_add_messages_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_cement_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_execute_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_originate_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_publish_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_recover_bond_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_refute_count', $data ?? [], null);
        $this->setIfExists('refutation_games_count', $data ?? [], null);
        $this->setIfExists('active_refutation_games_count', $data ?? [], null);
        $this->setIfExists('staking_ops_count', $data ?? [], null);
        $this->setIfExists('staking_updates_count', $data ?? [], null);
        $this->setIfExists('set_delegate_parameters_ops_count', $data ?? [], null);
        $this->setIfExists('dal_publish_commitment_ops_count', $data ?? [], null);
        $this->setIfExists('first_activity', $data ?? [], null);
        $this->setIfExists('first_activity_time', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('last_activity_time', $data ?? [], null);
        $this->setIfExists('extras', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('lost_balance', $data ?? [], null);
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
     * @param int|null $id Internal TzKT id
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
     * @param string|null $type type
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
     * @param string|null $address Public key hash of the account
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
     * @param string|null $alias Name of the project behind the account or account description
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
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key Base58 representation of account's public key, revealed by the account
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {

        if (is_null($public_key)) {
            array_push($this->openAPINullablesSetToNull, 'public_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets revealed
     *
     * @return bool|null
     */
    public function getRevealed()
    {
        return $this->container['revealed'];
    }

    /**
     * Sets revealed
     *
     * @param bool|null $revealed Public key revelation status. Unrevealed account can't send manager operation (transaction, origination etc.)
     *
     * @return self
     */
    public function setRevealed($revealed)
    {

        if (is_null($revealed)) {
            throw new \InvalidArgumentException('non-nullable revealed cannot be null');
        }

        $this->container['revealed'] = $revealed;

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
     * @param int|null $balance Account balance
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
     * Gets rollup_bonds
     *
     * @return int|null
     */
    public function getRollupBonds()
    {
        return $this->container['rollup_bonds'];
    }

    /**
     * Sets rollup_bonds
     *
     * @param int|null $rollup_bonds Amount of tx rollup commitment bonds (micro tez)
     *
     * @return self
     */
    public function setRollupBonds($rollup_bonds)
    {

        if (is_null($rollup_bonds)) {
            throw new \InvalidArgumentException('non-nullable rollup_bonds cannot be null');
        }

        $this->container['rollup_bonds'] = $rollup_bonds;

        return $this;
    }

    /**
     * Gets smart_rollup_bonds
     *
     * @return int|null
     */
    public function getSmartRollupBonds()
    {
        return $this->container['smart_rollup_bonds'];
    }

    /**
     * Sets smart_rollup_bonds
     *
     * @param int|null $smart_rollup_bonds Amount of smart rollup commitment bonds (micro tez)
     *
     * @return self
     */
    public function setSmartRollupBonds($smart_rollup_bonds)
    {

        if (is_null($smart_rollup_bonds)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_bonds cannot be null');
        }

        $this->container['smart_rollup_bonds'] = $smart_rollup_bonds;

        return $this;
    }

    /**
     * Gets staked_balance
     *
     * @return int|null
     */
    public function getStakedBalance()
    {
        return $this->container['staked_balance'];
    }

    /**
     * Sets staked_balance
     *
     * @param int|null $staked_balance Amount staked with the selected baker (micro tez). Like delegated amount, except for it is frozen and can be slashed.
     *
     * @return self
     */
    public function setStakedBalance($staked_balance)
    {

        if (is_null($staked_balance)) {
            throw new \InvalidArgumentException('non-nullable staked_balance cannot be null');
        }

        $this->container['staked_balance'] = $staked_balance;

        return $this;
    }

    /**
     * Gets staked_pseudotokens
     *
     * @return string|null
     */
    public function getStakedPseudotokens()
    {
        return $this->container['staked_pseudotokens'];
    }

    /**
     * Sets staked_pseudotokens
     *
     * @param string|null $staked_pseudotokens Amount of \"pseudo-tokens\" received after staking. These pseudotokens are used for unstaking.
     *
     * @return self
     */
    public function setStakedPseudotokens($staked_pseudotokens)
    {

        if (is_null($staked_pseudotokens)) {
            array_push($this->openAPINullablesSetToNull, 'staked_pseudotokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staked_pseudotokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['staked_pseudotokens'] = $staked_pseudotokens;

        return $this;
    }

    /**
     * Gets unstaked_balance
     *
     * @return int|null
     */
    public function getUnstakedBalance()
    {
        return $this->container['unstaked_balance'];
    }

    /**
     * Sets unstaked_balance
     *
     * @param int|null $unstaked_balance Amount that was unstaked, but not yet finalized (i.e. it is still frozen) (micro tez)
     *
     * @return self
     */
    public function setUnstakedBalance($unstaked_balance)
    {

        if (is_null($unstaked_balance)) {
            throw new \InvalidArgumentException('non-nullable unstaked_balance cannot be null');
        }

        $this->container['unstaked_balance'] = $unstaked_balance;

        return $this;
    }

    /**
     * Gets unstaked_baker
     *
     * @return OneOfAlias|null
     */
    public function getUnstakedBaker()
    {
        return $this->container['unstaked_baker'];
    }

    /**
     * Sets unstaked_baker
     *
     * @param OneOfAlias|null $unstaked_baker Information about the baker, for which there are pending unstake requests
     *
     * @return self
     */
    public function setUnstakedBaker($unstaked_baker)
    {

        if (is_null($unstaked_baker)) {
            array_push($this->openAPINullablesSetToNull, 'unstaked_baker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unstaked_baker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['unstaked_baker'] = $unstaked_baker;

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
     * @param OneOfDelegateInfo|null $delegate Information about the current delegate of the account. `null` if it's not delegated
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
     * @param int|null $delegation_level Block height of latest delegation. `null` if it's not delegated
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
     * @param \DateTime|null $delegation_time Block datetime of latest delegation (ISO 8601, e.g. `2020-02-20T02:40:57Z`). `null` if it's not delegated
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
     * @param int|null $num_contracts Number of contracts, created (originated) and/or managed by the account
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
     * Gets rollups_count
     *
     * @return int|null
     */
    public function getRollupsCount()
    {
        return $this->container['rollups_count'];
    }

    /**
     * Sets rollups_count
     *
     * @param int|null $rollups_count Number of tx rollups, created (originated) by the account
     *
     * @return self
     */
    public function setRollupsCount($rollups_count)
    {

        if (is_null($rollups_count)) {
            throw new \InvalidArgumentException('non-nullable rollups_count cannot be null');
        }

        $this->container['rollups_count'] = $rollups_count;

        return $this;
    }

    /**
     * Gets smart_rollups_count
     *
     * @return int|null
     */
    public function getSmartRollupsCount()
    {
        return $this->container['smart_rollups_count'];
    }

    /**
     * Sets smart_rollups_count
     *
     * @param int|null $smart_rollups_count Number of smart rollups, created (originated) by the account
     *
     * @return self
     */
    public function setSmartRollupsCount($smart_rollups_count)
    {

        if (is_null($smart_rollups_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollups_count cannot be null');
        }

        $this->container['smart_rollups_count'] = $smart_rollups_count;

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
     * @param int|null $active_tokens_count Number of account tokens with non-zero balances
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
     * @param int|null $token_balances_count Number of tokens the account ever had
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
     * @param int|null $token_transfers_count Number of token transfers from/to the account
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
     * Gets num_activations
     *
     * @return int|null
     */
    public function getNumActivations()
    {
        return $this->container['num_activations'];
    }

    /**
     * Sets num_activations
     *
     * @param int|null $num_activations Number of account activation operations. Are used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser
     *
     * @return self
     */
    public function setNumActivations($num_activations)
    {

        if (is_null($num_activations)) {
            throw new \InvalidArgumentException('non-nullable num_activations cannot be null');
        }

        $this->container['num_activations'] = $num_activations;

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
     * @param int|null $num_delegations Number of delegation operations, related to the account
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
     * @param int|null $num_originations Number of all origination (deployment / contract creation) operations, related to the account
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
     * @param int|null $num_transactions Number of all transaction (tez transfer) operations, related to the account
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
     * @param int|null $num_reveals Number of reveal (is used to reveal the public key associated with an account) operations of the contract
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
     * Gets num_register_constants
     *
     * @return int|null
     */
    public function getNumRegisterConstants()
    {
        return $this->container['num_register_constants'];
    }

    /**
     * Sets num_register_constants
     *
     * @param int|null $num_register_constants Number of register global constant operations sent by the account
     *
     * @return self
     */
    public function setNumRegisterConstants($num_register_constants)
    {

        if (is_null($num_register_constants)) {
            throw new \InvalidArgumentException('non-nullable num_register_constants cannot be null');
        }

        $this->container['num_register_constants'] = $num_register_constants;

        return $this;
    }

    /**
     * Gets num_set_deposits_limits
     *
     * @return int|null
     */
    public function getNumSetDepositsLimits()
    {
        return $this->container['num_set_deposits_limits'];
    }

    /**
     * Sets num_set_deposits_limits
     *
     * @param int|null $num_set_deposits_limits Number of set deposits limit operations sent by the account
     *
     * @return self
     */
    public function setNumSetDepositsLimits($num_set_deposits_limits)
    {

        if (is_null($num_set_deposits_limits)) {
            throw new \InvalidArgumentException('non-nullable num_set_deposits_limits cannot be null');
        }

        $this->container['num_set_deposits_limits'] = $num_set_deposits_limits;

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
     * @param int|null $num_migrations Number of migration (result of the context (database) migration during a protocol update) operations, related to the account (synthetic type)
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
     * Gets tx_rollup_origination_count
     *
     * @return int|null
     */
    public function getTxRollupOriginationCount()
    {
        return $this->container['tx_rollup_origination_count'];
    }

    /**
     * Sets tx_rollup_origination_count
     *
     * @param int|null $tx_rollup_origination_count Number of tx rollup origination operations sent by the account
     *
     * @return self
     */
    public function setTxRollupOriginationCount($tx_rollup_origination_count)
    {

        if (is_null($tx_rollup_origination_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_origination_count cannot be null');
        }

        $this->container['tx_rollup_origination_count'] = $tx_rollup_origination_count;

        return $this;
    }

    /**
     * Gets tx_rollup_submit_batch_count
     *
     * @return int|null
     */
    public function getTxRollupSubmitBatchCount()
    {
        return $this->container['tx_rollup_submit_batch_count'];
    }

    /**
     * Sets tx_rollup_submit_batch_count
     *
     * @param int|null $tx_rollup_submit_batch_count Number of tx rollup submit batch operations sent by the account
     *
     * @return self
     */
    public function setTxRollupSubmitBatchCount($tx_rollup_submit_batch_count)
    {

        if (is_null($tx_rollup_submit_batch_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_submit_batch_count cannot be null');
        }

        $this->container['tx_rollup_submit_batch_count'] = $tx_rollup_submit_batch_count;

        return $this;
    }

    /**
     * Gets tx_rollup_commit_count
     *
     * @return int|null
     */
    public function getTxRollupCommitCount()
    {
        return $this->container['tx_rollup_commit_count'];
    }

    /**
     * Sets tx_rollup_commit_count
     *
     * @param int|null $tx_rollup_commit_count Number of tx rollup commit operations sent by the account
     *
     * @return self
     */
    public function setTxRollupCommitCount($tx_rollup_commit_count)
    {

        if (is_null($tx_rollup_commit_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_commit_count cannot be null');
        }

        $this->container['tx_rollup_commit_count'] = $tx_rollup_commit_count;

        return $this;
    }

    /**
     * Gets tx_rollup_return_bond_count
     *
     * @return int|null
     */
    public function getTxRollupReturnBondCount()
    {
        return $this->container['tx_rollup_return_bond_count'];
    }

    /**
     * Sets tx_rollup_return_bond_count
     *
     * @param int|null $tx_rollup_return_bond_count Number of tx rollup return bond operations sent by the account
     *
     * @return self
     */
    public function setTxRollupReturnBondCount($tx_rollup_return_bond_count)
    {

        if (is_null($tx_rollup_return_bond_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_return_bond_count cannot be null');
        }

        $this->container['tx_rollup_return_bond_count'] = $tx_rollup_return_bond_count;

        return $this;
    }

    /**
     * Gets tx_rollup_finalize_commitment_count
     *
     * @return int|null
     */
    public function getTxRollupFinalizeCommitmentCount()
    {
        return $this->container['tx_rollup_finalize_commitment_count'];
    }

    /**
     * Sets tx_rollup_finalize_commitment_count
     *
     * @param int|null $tx_rollup_finalize_commitment_count Number of tx rollup finalize commitment operations sent by the account
     *
     * @return self
     */
    public function setTxRollupFinalizeCommitmentCount($tx_rollup_finalize_commitment_count)
    {

        if (is_null($tx_rollup_finalize_commitment_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_finalize_commitment_count cannot be null');
        }

        $this->container['tx_rollup_finalize_commitment_count'] = $tx_rollup_finalize_commitment_count;

        return $this;
    }

    /**
     * Gets tx_rollup_remove_commitment_count
     *
     * @return int|null
     */
    public function getTxRollupRemoveCommitmentCount()
    {
        return $this->container['tx_rollup_remove_commitment_count'];
    }

    /**
     * Sets tx_rollup_remove_commitment_count
     *
     * @param int|null $tx_rollup_remove_commitment_count Number of tx rollup remove commitment operations sent by the account
     *
     * @return self
     */
    public function setTxRollupRemoveCommitmentCount($tx_rollup_remove_commitment_count)
    {

        if (is_null($tx_rollup_remove_commitment_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_remove_commitment_count cannot be null');
        }

        $this->container['tx_rollup_remove_commitment_count'] = $tx_rollup_remove_commitment_count;

        return $this;
    }

    /**
     * Gets tx_rollup_rejection_count
     *
     * @return int|null
     */
    public function getTxRollupRejectionCount()
    {
        return $this->container['tx_rollup_rejection_count'];
    }

    /**
     * Sets tx_rollup_rejection_count
     *
     * @param int|null $tx_rollup_rejection_count Number of tx rollup rejection operations sent by the account
     *
     * @return self
     */
    public function setTxRollupRejectionCount($tx_rollup_rejection_count)
    {

        if (is_null($tx_rollup_rejection_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_rejection_count cannot be null');
        }

        $this->container['tx_rollup_rejection_count'] = $tx_rollup_rejection_count;

        return $this;
    }

    /**
     * Gets tx_rollup_dispatch_tickets_count
     *
     * @return int|null
     */
    public function getTxRollupDispatchTicketsCount()
    {
        return $this->container['tx_rollup_dispatch_tickets_count'];
    }

    /**
     * Sets tx_rollup_dispatch_tickets_count
     *
     * @param int|null $tx_rollup_dispatch_tickets_count Number of tx rollup dispatch tickets operations sent by the account
     *
     * @return self
     */
    public function setTxRollupDispatchTicketsCount($tx_rollup_dispatch_tickets_count)
    {

        if (is_null($tx_rollup_dispatch_tickets_count)) {
            throw new \InvalidArgumentException('non-nullable tx_rollup_dispatch_tickets_count cannot be null');
        }

        $this->container['tx_rollup_dispatch_tickets_count'] = $tx_rollup_dispatch_tickets_count;

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
     * @param int|null $transfer_ticket_count Number of transfer ticket operations sent by the account
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
     * @param int|null $increase_paid_storage_count Number of `increase_paid_storage` operations sent by the account
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
     * Gets drain_delegate_count
     *
     * @return int|null
     */
    public function getDrainDelegateCount()
    {
        return $this->container['drain_delegate_count'];
    }

    /**
     * Sets drain_delegate_count
     *
     * @param int|null $drain_delegate_count Number of `drain_delegate` operations related to the account
     *
     * @return self
     */
    public function setDrainDelegateCount($drain_delegate_count)
    {

        if (is_null($drain_delegate_count)) {
            throw new \InvalidArgumentException('non-nullable drain_delegate_count cannot be null');
        }

        $this->container['drain_delegate_count'] = $drain_delegate_count;

        return $this;
    }

    /**
     * Gets smart_rollup_add_messages_count
     *
     * @return int|null
     */
    public function getSmartRollupAddMessagesCount()
    {
        return $this->container['smart_rollup_add_messages_count'];
    }

    /**
     * Sets smart_rollup_add_messages_count
     *
     * @param int|null $smart_rollup_add_messages_count Number of `smart_rollup_add_messages` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupAddMessagesCount($smart_rollup_add_messages_count)
    {

        if (is_null($smart_rollup_add_messages_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_add_messages_count cannot be null');
        }

        $this->container['smart_rollup_add_messages_count'] = $smart_rollup_add_messages_count;

        return $this;
    }

    /**
     * Gets smart_rollup_cement_count
     *
     * @return int|null
     */
    public function getSmartRollupCementCount()
    {
        return $this->container['smart_rollup_cement_count'];
    }

    /**
     * Sets smart_rollup_cement_count
     *
     * @param int|null $smart_rollup_cement_count Number of `smart_rollup_cement` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupCementCount($smart_rollup_cement_count)
    {

        if (is_null($smart_rollup_cement_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_cement_count cannot be null');
        }

        $this->container['smart_rollup_cement_count'] = $smart_rollup_cement_count;

        return $this;
    }

    /**
     * Gets smart_rollup_execute_count
     *
     * @return int|null
     */
    public function getSmartRollupExecuteCount()
    {
        return $this->container['smart_rollup_execute_count'];
    }

    /**
     * Sets smart_rollup_execute_count
     *
     * @param int|null $smart_rollup_execute_count Number of `smart_rollup_execute_outbox_message` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupExecuteCount($smart_rollup_execute_count)
    {

        if (is_null($smart_rollup_execute_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_execute_count cannot be null');
        }

        $this->container['smart_rollup_execute_count'] = $smart_rollup_execute_count;

        return $this;
    }

    /**
     * Gets smart_rollup_originate_count
     *
     * @return int|null
     */
    public function getSmartRollupOriginateCount()
    {
        return $this->container['smart_rollup_originate_count'];
    }

    /**
     * Sets smart_rollup_originate_count
     *
     * @param int|null $smart_rollup_originate_count Number of `smart_rollup_originate` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupOriginateCount($smart_rollup_originate_count)
    {

        if (is_null($smart_rollup_originate_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_originate_count cannot be null');
        }

        $this->container['smart_rollup_originate_count'] = $smart_rollup_originate_count;

        return $this;
    }

    /**
     * Gets smart_rollup_publish_count
     *
     * @return int|null
     */
    public function getSmartRollupPublishCount()
    {
        return $this->container['smart_rollup_publish_count'];
    }

    /**
     * Sets smart_rollup_publish_count
     *
     * @param int|null $smart_rollup_publish_count Number of `smart_rollup_publish` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupPublishCount($smart_rollup_publish_count)
    {

        if (is_null($smart_rollup_publish_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_publish_count cannot be null');
        }

        $this->container['smart_rollup_publish_count'] = $smart_rollup_publish_count;

        return $this;
    }

    /**
     * Gets smart_rollup_recover_bond_count
     *
     * @return int|null
     */
    public function getSmartRollupRecoverBondCount()
    {
        return $this->container['smart_rollup_recover_bond_count'];
    }

    /**
     * Sets smart_rollup_recover_bond_count
     *
     * @param int|null $smart_rollup_recover_bond_count Number of `smart_rollup_recover_bond` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupRecoverBondCount($smart_rollup_recover_bond_count)
    {

        if (is_null($smart_rollup_recover_bond_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_recover_bond_count cannot be null');
        }

        $this->container['smart_rollup_recover_bond_count'] = $smart_rollup_recover_bond_count;

        return $this;
    }

    /**
     * Gets smart_rollup_refute_count
     *
     * @return int|null
     */
    public function getSmartRollupRefuteCount()
    {
        return $this->container['smart_rollup_refute_count'];
    }

    /**
     * Sets smart_rollup_refute_count
     *
     * @param int|null $smart_rollup_refute_count Number of `smart_rollup_refute` operations related to the account
     *
     * @return self
     */
    public function setSmartRollupRefuteCount($smart_rollup_refute_count)
    {

        if (is_null($smart_rollup_refute_count)) {
            throw new \InvalidArgumentException('non-nullable smart_rollup_refute_count cannot be null');
        }

        $this->container['smart_rollup_refute_count'] = $smart_rollup_refute_count;

        return $this;
    }

    /**
     * Gets refutation_games_count
     *
     * @return int|null
     */
    public function getRefutationGamesCount()
    {
        return $this->container['refutation_games_count'];
    }

    /**
     * Sets refutation_games_count
     *
     * @param int|null $refutation_games_count Number of smart rollup refutation games related to the account
     *
     * @return self
     */
    public function setRefutationGamesCount($refutation_games_count)
    {

        if (is_null($refutation_games_count)) {
            throw new \InvalidArgumentException('non-nullable refutation_games_count cannot be null');
        }

        $this->container['refutation_games_count'] = $refutation_games_count;

        return $this;
    }

    /**
     * Gets active_refutation_games_count
     *
     * @return int|null
     */
    public function getActiveRefutationGamesCount()
    {
        return $this->container['active_refutation_games_count'];
    }

    /**
     * Sets active_refutation_games_count
     *
     * @param int|null $active_refutation_games_count Number of active smart rollup refutation games related to the account
     *
     * @return self
     */
    public function setActiveRefutationGamesCount($active_refutation_games_count)
    {

        if (is_null($active_refutation_games_count)) {
            throw new \InvalidArgumentException('non-nullable active_refutation_games_count cannot be null');
        }

        $this->container['active_refutation_games_count'] = $active_refutation_games_count;

        return $this;
    }

    /**
     * Gets staking_ops_count
     *
     * @return int|null
     */
    public function getStakingOpsCount()
    {
        return $this->container['staking_ops_count'];
    }

    /**
     * Sets staking_ops_count
     *
     * @param int|null $staking_ops_count Number of staking operations related to the account
     *
     * @return self
     */
    public function setStakingOpsCount($staking_ops_count)
    {

        if (is_null($staking_ops_count)) {
            throw new \InvalidArgumentException('non-nullable staking_ops_count cannot be null');
        }

        $this->container['staking_ops_count'] = $staking_ops_count;

        return $this;
    }

    /**
     * Gets staking_updates_count
     *
     * @return int|null
     */
    public function getStakingUpdatesCount()
    {
        return $this->container['staking_updates_count'];
    }

    /**
     * Sets staking_updates_count
     *
     * @param int|null $staking_updates_count Number of staking updates related to the account
     *
     * @return self
     */
    public function setStakingUpdatesCount($staking_updates_count)
    {

        if (is_null($staking_updates_count)) {
            throw new \InvalidArgumentException('non-nullable staking_updates_count cannot be null');
        }

        $this->container['staking_updates_count'] = $staking_updates_count;

        return $this;
    }

    /**
     * Gets set_delegate_parameters_ops_count
     *
     * @return int|null
     */
    public function getSetDelegateParametersOpsCount()
    {
        return $this->container['set_delegate_parameters_ops_count'];
    }

    /**
     * Sets set_delegate_parameters_ops_count
     *
     * @param int|null $set_delegate_parameters_ops_count Number of set delegate parameters operations related to the account
     *
     * @return self
     */
    public function setSetDelegateParametersOpsCount($set_delegate_parameters_ops_count)
    {

        if (is_null($set_delegate_parameters_ops_count)) {
            throw new \InvalidArgumentException('non-nullable set_delegate_parameters_ops_count cannot be null');
        }

        $this->container['set_delegate_parameters_ops_count'] = $set_delegate_parameters_ops_count;

        return $this;
    }

    /**
     * Gets dal_publish_commitment_ops_count
     *
     * @return int|null
     */
    public function getDalPublishCommitmentOpsCount()
    {
        return $this->container['dal_publish_commitment_ops_count'];
    }

    /**
     * Sets dal_publish_commitment_ops_count
     *
     * @param int|null $dal_publish_commitment_ops_count Number of DAL publish commitment operations related to the account
     *
     * @return self
     */
    public function setDalPublishCommitmentOpsCount($dal_publish_commitment_ops_count)
    {

        if (is_null($dal_publish_commitment_ops_count)) {
            throw new \InvalidArgumentException('non-nullable dal_publish_commitment_ops_count cannot be null');
        }

        $this->container['dal_publish_commitment_ops_count'] = $dal_publish_commitment_ops_count;

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
     * @param int|null $first_activity Block height of the first operation, related to the account
     *
     * @return self
     */
    public function setFirstActivity($first_activity)
    {

        if (is_null($first_activity)) {
            array_push($this->openAPINullablesSetToNull, 'first_activity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_activity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param \DateTime|null $first_activity_time Block datetime of the first operation, related to the account (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setFirstActivityTime($first_activity_time)
    {

        if (is_null($first_activity_time)) {
            array_push($this->openAPINullablesSetToNull, 'first_activity_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_activity_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param int|null $last_activity Height of the block in which the account state was changed last time
     *
     * @return self
     */
    public function setLastActivity($last_activity)
    {

        if (is_null($last_activity)) {
            array_push($this->openAPINullablesSetToNull, 'last_activity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_activity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param \DateTime|null $last_activity_time Datetime of the block in which the account state was changed last time (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setLastActivityTime($last_activity_time)
    {

        if (is_null($last_activity_time)) {
            array_push($this->openAPINullablesSetToNull, 'last_activity_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_activity_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_activity_time'] = $last_activity_time;

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
     * @param mixed|null $extras Off-chain extras
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
     * @param mixed|null $metadata [DEPRECATED]
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
     * Gets lost_balance
     *
     * @return int|null
     */
    public function getLostBalance()
    {
        return $this->container['lost_balance'];
    }

    /**
     * Sets lost_balance
     *
     * @param int|null $lost_balance [DEPRECATED]
     *
     * @return self
     */
    public function setLostBalance($lost_balance)
    {

        if (is_null($lost_balance)) {
            throw new \InvalidArgumentException('non-nullable lost_balance cannot be null');
        }

        $this->container['lost_balance'] = $lost_balance;

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


