<?php

namespace Kwetal\Silex\Controller\Frontend;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class DefaultController
{
    public function defaultAction(Request $request, Application $app)
    {
        return $app['twig']->render('@twigFrontendTemplates/index.twig', ['name' => 'Twig Frontend Template']);
    }
} 
