<?php

namespace Drupal\order\Controller;

use Symfony\Component\HttpFoundation\Request;

use Drupal\Core\Controller\ControllerBase;
use Drupal\order\Services\OrderServices;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrderController extends ControllerBase
{
    public $session;

    public function __construct()
    {
        $this->session = \Drupal::request()->getSession();
    }

    public function index()
    {
        return [
            '#theme' => 'order_index',
        ];
    }
}
