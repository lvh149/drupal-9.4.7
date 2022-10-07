<?php

namespace Drupal\product\Controller;

use Drupal\Core\Controller\ControllerBase;

class ProductController extends ControllerBase
{
    public function getProductByCategory($category_id)
    {
        return ['#theme' => 'product_view_by_category',];
    }
}
