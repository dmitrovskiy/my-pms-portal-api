<?php
/**
 * Created by PhpStorm.
 * User: plastic760
 * Date: 09.10.14
 * Time: 21:05
 */

namespace Pms\Api\Providers;


use Silex\Application;
use Silex\ServiceProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class RequestConvertServiceProvider implements ServiceProviderInterface {

    public function register (Application $app) {

        /*
         * Service that converts json into normal array values
         */
        $app['json_request_decoder'] = $app->protect(function (Request $request) {

            if (
                false !== strpos($request->headers->get('Content-Type'), 'json')
                && $request->getContent() != "" && $request->getContent() != "null"
            ) {

                $data = json_decode($request->getContent(), true);
                if(is_null($data)) {
                    throw new \Exception("Invalid JSON format", HTTPCode::HTTP_NOT_ACCEPTABLE);
                }

                $request->request->replace(is_array($data) ? $data : array());
            }
        });

    }

    public function boot (Application $app) { }

} 