<?php

/**
 * WhitelistsApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.50
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * WhitelistsApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WhitelistsApi
{
    protected $config;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add email to allowlist
     * Adds an email to your email rejection allowlist. If the address is currently on your denylist, that denylist entry will be removed automatically.
     */
    public function add($body = [])
    {
        return $this->config->post('/whitelists/add', $body);
    }
    /**
     * Remove email from allowlist
     * Removes an email address from the allowlist.
     */
    public function delete($body = [])
    {
        return $this->config->post('/whitelists/delete', $body);
    }
    /**
     * List allowlisted emails
     * Retrieves your email rejection allowlist. You can provide an email address or search prefix to limit the results. Returns up to 1000 results.
     */
    public function list($body = [])
    {
        return $this->config->post('/whitelists/list', $body);
    }
}
