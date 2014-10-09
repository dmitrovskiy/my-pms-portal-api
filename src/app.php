<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 16:46
 */

use Pms\Api\Providers\RequestConvertServiceProvider;

//for converting json request
$app->register(new RequestConvertServiceProvider());

return $app;