<?php

namespace Kwetal\Silex\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class DefaultController
{
    public function defaultAction(Request $request, Application $app)
    {
        return $app['twig']->render('@twigBackendTemplates/index.twig', ['name' => 'Twig Backend Template']);
    }
}
