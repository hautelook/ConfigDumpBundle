<?php

namespace Hautelook\ConfigDumpBundle\Tests\Functional\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RootController extends Controller
{
    public function testAction()
    {
        return new Response("TestResponse");
    }
}
