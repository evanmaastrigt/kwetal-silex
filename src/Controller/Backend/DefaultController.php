<?php

namespace Kwetal\Silex\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;

class DefaultController
{
    public function defaultAction(Request $request)
    {
        return 'Hello Backend World!';
    }
}
