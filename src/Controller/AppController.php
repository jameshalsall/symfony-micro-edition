<?php

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * AppController
 *
 * @package Controller
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class AppController extends Controller
{
    /**
     * @Route("")
     *
     * @return JsonResponse
     */
    public function indexAction()
    {
        return new JsonResponse(['data' => 'value']);
    }
}
