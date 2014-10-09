<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 21:16
 */

namespace Pms\Api\Providers;


use Silex\Application;
use Silex\ControllerProviderInterface;
use Pms\Api\Controller\StuffController;

class StuffControllerProvider implements ControllerProviderInterface {

    public function connect (Application $app) {

        $app['stuff.controller'] = $app->share(function(Application $app) {
            return new StuffController($app);
        });

        //creating routing for stuff controller
        $controllers = $app['controllers_factory'];

        $controllers->get('/', "stuff.controller::actionIndex");
        $controllers->post('/', "stuff.controller::actionAdd");
        $controllers->delete('/', "stuff.controller::actionDelete");
        $controllers->update('/', "stuff.controller::actionUpdate");

        return $controllers;
    }

} 