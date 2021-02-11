<?php
/**
 * ApiServer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample Petstore server.  You can find  out more about Swagger at  [http://swagger.io](http://swagger.io) or on  [irc.freenode.net, #swagger](http://swagger.io/irc/).
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

/**
 * ApiServer Class Doc Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiServer
{

    /**
     * @var array
     */
    private $apis = array();

    /**
     * Adds an API handler to the server.
     *
     * @param string $api An API name of the handle
     * @param mixed $handler A handler to set for the given API
     */
    public function addApiHandler($api, $handler)
    {
        if (isset($this->apis[$api])) {
            throw new \InvalidArgumentException('API has already a handler: '.$api);
        }

        $this->apis[$api] = $handler;
    }

    /**
     * Returns an API handler.
     *
     * @param string $api An API name of the handle
     * @return mixed Returns a handler
     * @throws \InvalidArgumentException When no such handler exists
     */
    public function getApiHandler($api)
    {
        if (!isset($this->apis[$api])) {
            throw new \InvalidArgumentException('No handler for '.$api.' implemented.');
        }

        return $this->apis[$api];
    }
}
