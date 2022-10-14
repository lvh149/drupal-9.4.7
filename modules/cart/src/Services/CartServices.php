<?php

namespace Drupal\cart\Services;

use Drupal\image\Entity\ImageStyle;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;

class CartServices
{
    public static $paginator = 3;

    public static function checkProduct($product_id)
    {
        $products = Node::load($product_id);
        if(!$products){
            return 0;
        }
        $product['id'] =  $products->id();
        $product['name'] =  $products->getTitle();
        $product['description'] = $products->body->value;
        $product['price_format'] = number_format($products->field_price->value, 0, ',', '.');
        $product['price'] = $products->field_price->value;
        $product['image'] = file_create_url($products->field_image_product->entity->getFileUri());;
        return $product;
    }
}
