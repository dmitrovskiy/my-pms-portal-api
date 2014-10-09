<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 20:57
 */

namespace Pms\Api\Controller;

use Silex\Application;
use Pms\Api\Library\AbstractController;

class PaymentController extends AbstractController {

    public function __construct (Application $app) {
        parent::__construct($app);

    }


    public function actionIndex () {
        return $this->app->json('<br>[ Stuff Controller : it works! ]<br>');
    }

    public function actionAdd () {
        return $this->app->json('<br>[ Stuff Controller : it works! ]<br>');
    }

    public function actionDelete () {
        return $this->app->json('<br>[ Stuff Controller : it works! ]<br>');
    }

    public function actionUpdate () {
        return $this->app->json('<br>[ Stuff Controller : it works! ]<br>');
    }

} 