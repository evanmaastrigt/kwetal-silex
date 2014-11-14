<?php

namespace Kwetal\Silex\Controller\Frontend;

use Symfony\Component\HttpFoundation\Request;

class DefaultController
{
    public function defaultAction(Request $request)
    {
        return 'Hello Frontend World!';
    }
} 
