<?php
/**
 * Configuration
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

namespace Bzzhh\Tzkt;

/**
 * Configuration Class Doc Comment
 * PHP version 7.4
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected $booleanFormatForQueryString = self::BOOLEAN_FORMAT_INT;

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.tzkt.io';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'OpenAPI-Generator/1.0.0/PHP';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormatForQueryString Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat)
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Bzzhh\Tzkt) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 1.14.4' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return null|string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://api.tzkt.io",
                "description" => "No description provided",
            ]
        ];
    }

    /**
    * Returns URL based on host settings, index and variables
    *
    * @param array      $hostSettings array of host settings, generated from getHostSettings() or equivalent from the API clients
    * @param int        $hostIndex    index of the host settings
    * @param array|null $variables    hash of variable and the corresponding value (optional)
    * @return string URL based on host settings
    */
    public static function getHostString(array $hostsSettings, $hostIndex, array $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        // check array index out of bound
        if ($hostIndex < 0 || $hostIndex >= count($hostsSettings)) {
            throw new \InvalidArgumentException("Invalid index $hostIndex when selecting the host. Must be less than ".count($hostsSettings));
        }

        $host = $hostsSettings[$hostIndex];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (!isset($variable['enum_values']) || in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        return self::getHostString($this->getHostSettings(), $index, $variables);
    }
}
