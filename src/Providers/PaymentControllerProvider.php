<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 21:17
 */

namespace Pms\Api\Providers;


use Silex\Application;
use Silex\ControllerProviderInterface;
use Pms\Api\Controller\PaymentController;

class PaymentControllerProvider implements ControllerProviderInterface {

    public function connect (Application $app) {

        $app['payment.controller'] = $app->share(function(Application $app) {
            return new PaymentController($app);
        });

        //creating routing for stuff controller
        $controllers = $app['controllers_factory'];

        $controllers->get('/', "payment.controller::actionIndex");
        $controllers->post('/', "payment.controller::actionAdd");
        $controllers->delete('/', "payment.controller::actionDelete");
        $controllers->update('/', "payment.controller::actionUpdate");

        return $controllers;
    }

} 