<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'iwhmcs/v1'], function (Router $router) {
  //Route sync customers
  $router->get('/sync-clients-bitrix24', [
    'as' => 'api.iwhmcs.sync.cients.bitrix',
    'uses' => 'WhmcsApiController@syncClientsToBitrix24',
    'middleware' => ['auth:api']
  ]);
  //Route Sync products
  $router->get('/sync-projects-as-hosting', [
    'as' => 'api.iwhmcs.sync.projects.as.hostings',
    'uses' => 'WhmcsApiController@syncProjectsAsHosting',
    'middleware' => ['auth:api']
  ]);
  //Set group Clients
  $router->get('/set-group-clients', [
    'as' => 'api.iwhmcs.sync.set.group.clients',
    'uses' => 'WhmcsApiController@SetGroupClients',
    'middleware' => ['auth:api']
  ]);
  //Set user to invoice items
  $router->get('/set-client-to-invoice', [
    'as' => 'api.iwhmcs.sync.set.client.to.invoice',
    'uses' => 'WhmcsApiController@setClientToInvoice',
    'middleware' => ['auth:api']
  ]);
});
