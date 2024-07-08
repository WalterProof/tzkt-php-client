<?php
/**
 * PrimType
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
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * PrimType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PrimType
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_0 = 0;

    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_3 = 3;

    public const NUMBER_4 = 4;

    public const NUMBER_5 = 5;

    public const NUMBER_6 = 6;

    public const NUMBER_7 = 7;

    public const NUMBER_8 = 8;

    public const NUMBER_9 = 9;

    public const NUMBER_10 = 10;

    public const NUMBER_11 = 11;

    public const NUMBER_12 = 12;

    public const NUMBER_13 = 13;

    public const NUMBER_14 = 14;

    public const NUMBER_15 = 15;

    public const NUMBER_16 = 16;

    public const NUMBER_17 = 17;

    public const NUMBER_18 = 18;

    public const NUMBER_19 = 19;

    public const NUMBER_20 = 20;

    public const NUMBER_21 = 21;

    public const NUMBER_22 = 22;

    public const NUMBER_23 = 23;

    public const NUMBER_24 = 24;

    public const NUMBER_25 = 25;

    public const NUMBER_26 = 26;

    public const NUMBER_27 = 27;

    public const NUMBER_28 = 28;

    public const NUMBER_29 = 29;

    public const NUMBER_30 = 30;

    public const NUMBER_31 = 31;

    public const NUMBER_32 = 32;

    public const NUMBER_33 = 33;

    public const NUMBER_34 = 34;

    public const NUMBER_35 = 35;

    public const NUMBER_36 = 36;

    public const NUMBER_37 = 37;

    public const NUMBER_38 = 38;

    public const NUMBER_39 = 39;

    public const NUMBER_40 = 40;

    public const NUMBER_41 = 41;

    public const NUMBER_42 = 42;

    public const NUMBER_43 = 43;

    public const NUMBER_44 = 44;

    public const NUMBER_45 = 45;

    public const NUMBER_46 = 46;

    public const NUMBER_47 = 47;

    public const NUMBER_48 = 48;

    public const NUMBER_49 = 49;

    public const NUMBER_50 = 50;

    public const NUMBER_51 = 51;

    public const NUMBER_52 = 52;

    public const NUMBER_53 = 53;

    public const NUMBER_54 = 54;

    public const NUMBER_55 = 55;

    public const NUMBER_56 = 56;

    public const NUMBER_57 = 57;

    public const NUMBER_58 = 58;

    public const NUMBER_59 = 59;

    public const NUMBER_60 = 60;

    public const NUMBER_61 = 61;

    public const NUMBER_62 = 62;

    public const NUMBER_63 = 63;

    public const NUMBER_64 = 64;

    public const NUMBER_65 = 65;

    public const NUMBER_66 = 66;

    public const NUMBER_67 = 67;

    public const NUMBER_68 = 68;

    public const NUMBER_69 = 69;

    public const NUMBER_70 = 70;

    public const NUMBER_71 = 71;

    public const NUMBER_72 = 72;

    public const NUMBER_73 = 73;

    public const NUMBER_74 = 74;

    public const NUMBER_75 = 75;

    public const NUMBER_76 = 76;

    public const NUMBER_77 = 77;

    public const NUMBER_78 = 78;

    public const NUMBER_79 = 79;

    public const NUMBER_80 = 80;

    public const NUMBER_81 = 81;

    public const NUMBER_82 = 82;

    public const NUMBER_83 = 83;

    public const NUMBER_84 = 84;

    public const NUMBER_85 = 85;

    public const NUMBER_86 = 86;

    public const NUMBER_87 = 87;

    public const NUMBER_88 = 88;

    public const NUMBER_89 = 89;

    public const NUMBER_90 = 90;

    public const NUMBER_91 = 91;

    public const NUMBER_92 = 92;

    public const NUMBER_93 = 93;

    public const NUMBER_94 = 94;

    public const NUMBER_95 = 95;

    public const NUMBER_96 = 96;

    public const NUMBER_97 = 97;

    public const NUMBER_98 = 98;

    public const NUMBER_99 = 99;

    public const NUMBER_100 = 100;

    public const NUMBER_101 = 101;

    public const NUMBER_102 = 102;

    public const NUMBER_103 = 103;

    public const NUMBER_104 = 104;

    public const NUMBER_105 = 105;

    public const NUMBER_106 = 106;

    public const NUMBER_107 = 107;

    public const NUMBER_108 = 108;

    public const NUMBER_109 = 109;

    public const NUMBER_110 = 110;

    public const NUMBER_111 = 111;

    public const NUMBER_112 = 112;

    public const NUMBER_113 = 113;

    public const NUMBER_114 = 114;

    public const NUMBER_115 = 115;

    public const NUMBER_116 = 116;

    public const NUMBER_117 = 117;

    public const NUMBER_118 = 118;

    public const NUMBER_119 = 119;

    public const NUMBER_120 = 120;

    public const NUMBER_121 = 121;

    public const NUMBER_122 = 122;

    public const NUMBER_123 = 123;

    public const NUMBER_124 = 124;

    public const NUMBER_125 = 125;

    public const NUMBER_126 = 126;

    public const NUMBER_127 = 127;

    public const NUMBER_128 = 128;

    public const NUMBER_129 = 129;

    public const NUMBER_130 = 130;

    public const NUMBER_131 = 131;

    public const NUMBER_132 = 132;

    public const NUMBER_133 = 133;

    public const NUMBER_134 = 134;

    public const NUMBER_135 = 135;

    public const NUMBER_136 = 136;

    public const NUMBER_137 = 137;

    public const NUMBER_138 = 138;

    public const NUMBER_139 = 139;

    public const NUMBER_140 = 140;

    public const NUMBER_141 = 141;

    public const NUMBER_142 = 142;

    public const NUMBER_143 = 143;

    public const NUMBER_144 = 144;

    public const NUMBER_145 = 145;

    public const NUMBER_146 = 146;

    public const NUMBER_147 = 147;

    public const NUMBER_148 = 148;

    public const NUMBER_149 = 149;

    public const NUMBER_150 = 150;

    public const NUMBER_151 = 151;

    public const NUMBER_152 = 152;

    public const NUMBER_153 = 153;

    public const NUMBER_154 = 154;

    public const NUMBER_155 = 155;

    public const NUMBER_156 = 156;

    public const NUMBER_157 = 157;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_0,
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_3,
            self::NUMBER_4,
            self::NUMBER_5,
            self::NUMBER_6,
            self::NUMBER_7,
            self::NUMBER_8,
            self::NUMBER_9,
            self::NUMBER_10,
            self::NUMBER_11,
            self::NUMBER_12,
            self::NUMBER_13,
            self::NUMBER_14,
            self::NUMBER_15,
            self::NUMBER_16,
            self::NUMBER_17,
            self::NUMBER_18,
            self::NUMBER_19,
            self::NUMBER_20,
            self::NUMBER_21,
            self::NUMBER_22,
            self::NUMBER_23,
            self::NUMBER_24,
            self::NUMBER_25,
            self::NUMBER_26,
            self::NUMBER_27,
            self::NUMBER_28,
            self::NUMBER_29,
            self::NUMBER_30,
            self::NUMBER_31,
            self::NUMBER_32,
            self::NUMBER_33,
            self::NUMBER_34,
            self::NUMBER_35,
            self::NUMBER_36,
            self::NUMBER_37,
            self::NUMBER_38,
            self::NUMBER_39,
            self::NUMBER_40,
            self::NUMBER_41,
            self::NUMBER_42,
            self::NUMBER_43,
            self::NUMBER_44,
            self::NUMBER_45,
            self::NUMBER_46,
            self::NUMBER_47,
            self::NUMBER_48,
            self::NUMBER_49,
            self::NUMBER_50,
            self::NUMBER_51,
            self::NUMBER_52,
            self::NUMBER_53,
            self::NUMBER_54,
            self::NUMBER_55,
            self::NUMBER_56,
            self::NUMBER_57,
            self::NUMBER_58,
            self::NUMBER_59,
            self::NUMBER_60,
            self::NUMBER_61,
            self::NUMBER_62,
            self::NUMBER_63,
            self::NUMBER_64,
            self::NUMBER_65,
            self::NUMBER_66,
            self::NUMBER_67,
            self::NUMBER_68,
            self::NUMBER_69,
            self::NUMBER_70,
            self::NUMBER_71,
            self::NUMBER_72,
            self::NUMBER_73,
            self::NUMBER_74,
            self::NUMBER_75,
            self::NUMBER_76,
            self::NUMBER_77,
            self::NUMBER_78,
            self::NUMBER_79,
            self::NUMBER_80,
            self::NUMBER_81,
            self::NUMBER_82,
            self::NUMBER_83,
            self::NUMBER_84,
            self::NUMBER_85,
            self::NUMBER_86,
            self::NUMBER_87,
            self::NUMBER_88,
            self::NUMBER_89,
            self::NUMBER_90,
            self::NUMBER_91,
            self::NUMBER_92,
            self::NUMBER_93,
            self::NUMBER_94,
            self::NUMBER_95,
            self::NUMBER_96,
            self::NUMBER_97,
            self::NUMBER_98,
            self::NUMBER_99,
            self::NUMBER_100,
            self::NUMBER_101,
            self::NUMBER_102,
            self::NUMBER_103,
            self::NUMBER_104,
            self::NUMBER_105,
            self::NUMBER_106,
            self::NUMBER_107,
            self::NUMBER_108,
            self::NUMBER_109,
            self::NUMBER_110,
            self::NUMBER_111,
            self::NUMBER_112,
            self::NUMBER_113,
            self::NUMBER_114,
            self::NUMBER_115,
            self::NUMBER_116,
            self::NUMBER_117,
            self::NUMBER_118,
            self::NUMBER_119,
            self::NUMBER_120,
            self::NUMBER_121,
            self::NUMBER_122,
            self::NUMBER_123,
            self::NUMBER_124,
            self::NUMBER_125,
            self::NUMBER_126,
            self::NUMBER_127,
            self::NUMBER_128,
            self::NUMBER_129,
            self::NUMBER_130,
            self::NUMBER_131,
            self::NUMBER_132,
            self::NUMBER_133,
            self::NUMBER_134,
            self::NUMBER_135,
            self::NUMBER_136,
            self::NUMBER_137,
            self::NUMBER_138,
            self::NUMBER_139,
            self::NUMBER_140,
            self::NUMBER_141,
            self::NUMBER_142,
            self::NUMBER_143,
            self::NUMBER_144,
            self::NUMBER_145,
            self::NUMBER_146,
            self::NUMBER_147,
            self::NUMBER_148,
            self::NUMBER_149,
            self::NUMBER_150,
            self::NUMBER_151,
            self::NUMBER_152,
            self::NUMBER_153,
            self::NUMBER_154,
            self::NUMBER_155,
            self::NUMBER_156,
            self::NUMBER_157
        ];
    }
}


