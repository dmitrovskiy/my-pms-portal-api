<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 16:43
 */


require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../src/web.php';

return $app;