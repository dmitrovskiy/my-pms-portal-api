<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 20:36
 */

namespace Pms\Api\Library;

use Silex\Application;

abstract class AbstractController {

    protected $app;

    //Main logic
    public function __construct (Application $app) {
        $this->app = $app;
    }

} 