<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 16:46
 */

use Symfony\Component\HttpFoundation\Request;

$app->before($app['json_request_decoder']);

/*
 * Stuff controller
 */
$app->mount('/stuff', new Pms\Api\Providers\StuffControllerProvider());

/*
 * Payment controller
 */
$app->mount('/payment', new Pms\Api\Providers\PaymentControllerProvider());