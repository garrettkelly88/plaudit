<?php
/**
 * Simple Inventory API
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * POST addInventory
 * Summary: adds an inventory item
 * Notes: Adds an item to the system
 * Output-Formats: [application/json]
 */
$app->POST('/garrettkelly88/Plaudit/1.0.0/inventory', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addInventory as a POST method ?');
            return $response;
            });


/**
 * GET searchInventory
 * Summary: searches inventory
 * Notes: By passing in the appropriate options, you can search for available inventory in the system 
 * Output-Formats: [application/json]
 */
$app->GET('/garrettkelly88/Plaudit/1.0.0/inventory', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $searchString = $queryParams['searchString'];    $skip = $queryParams['skip'];    $limit = $queryParams['limit'];    
            
            
            $response->write('How about implementing searchInventory as a GET method ?');
            return $response;
            });



$app->run();
