<?php

namespace Drupal\product\Controller;

use Symfony\Component\HttpFoundation\Request;

use Drupal\Core\Controller\ControllerBase;
use Drupal\product\Services\ProductServices;

class ProductController extends ControllerBase
{
    public function getProductByCategory($category_id, Request $request)
    {
        $max = substr($request->get('max'), 1);
        $min = substr($request->get('min'), 1);
        $categories = [];
        $categories = ProductServices::getCategories();

        $category = [];
        $category = ProductServices::getCategoryName($category_id);
        $products = [];


        $data = ProductServices::getProductByCategory($category_id,$min,$max);
        $products = $data['products'];
        $price_range = $data['price'];

        return [
            '#theme' => 'product_view_by_category',
            '#products' => $products,
            '#category' => $category,
            '#categories' => $categories,
            '#price_range' => $price_range,
            '#parger' => [
                '#type' => 'pager'
            ]
        ];
    }

    public function getProductDetail($product_id)
    {
        $product = [];
        $product = ProductServices::getProductById($product_id);
        return [
            '#theme' => 'product_detail',
            '#product' => $product,
            '#parger' => [
                '#type' => 'pager'
            ]
        ];
    }
}
