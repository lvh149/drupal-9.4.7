<?php

namespace Drupal\product\Services;

use Drupal\image\Entity\ImageStyle;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;

class ProductServices
{
    public static $paginator = 1;

    public static function getProductByCategory($category_id, $min = null, $max = null)
    {
        $manager = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
        $level1 = $manager->loadTree('categories', $category_id, 1, false);
        $level2 = [];
        if ($level1) {
            foreach ($level1 as $child) {
                $level2[] = $child->tid;
            }
        } else {
            $level2 = $category_id;
        }
        $query = \Drupal::entityQuery('node');
        $query->condition('field_category', $level2, 'IN');
        if ($min) {
            $query->condition('field_price', array($min, $max), 'BETWEEN');
        }
        $query->pager(self::$paginator);
        $nid = $query->execute();
        $ContentTypes = Node::loadMultiple($nid);
        $products = [];
        foreach ($ContentTypes as $ContentType) {
            $products[$ContentType->id()]['id'] =  $ContentType->id();
            $products[$ContentType->id()]['name'] =  $ContentType->getTitle();
            $products[$ContentType->id()]['price'] = self::currency_format($ContentType->field_price->value);
            $products[$ContentType->id()]['image'] = file_create_url($ContentType->field_image_product->entity->getFileUri());
        }

        $price_max = \Drupal::entityQuery('node')
            ->condition('field_category', $level2, 'IN')
            ->sort('field_price', 'DESC')
            ->range(0, 1)
            ->execute();
        $price_max = Node::loadMultiple($price_max);
        foreach ($price_max as $max) {
            $max = $max->field_price->value;
        }
        $price_min = \Drupal::entityQuery('node')
            ->condition('field_category', $level2, 'IN')
            ->sort('field_price', 'ASC')
            ->range(0, 1)
            ->execute();
        $price_min = Node::loadMultiple($price_min);
        foreach ($price_min as $min) {
            $min = $min->field_price->value;
        }
        $price = [
            'min' => $min,
            'max' => $max,
        ];
        return [
            'products' => $products,
            'price' => $price,
        ];
    }

    public static function getProductByPrice($category_id, $min, $max)
    {
        $manager = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
        $level1 = $manager->loadTree('categories', $category_id, 1, false);
        $level2 = [];
        if ($level1) {
            foreach ($level1 as $child) {
                $level2[] = $child->tid;
            }
        } else {
            $level2 = $category_id;
        }

        $nid = \Drupal::entityQuery('node')
            ->condition('field_category', $level2, 'IN')
            ->condition('field_price', [$min, $max], 'BETWEEN')
            ->pager(self::$paginator)
            ->execute();
        $ContentTypes = Node::loadMultiple($nid);
        $products = [];
        foreach ($ContentTypes as $ContentType) {
            $products[$ContentType->id()]['id'] =  $ContentType->id();
            $products[$ContentType->id()]['name'] =  $ContentType->getTitle();
            $products[$ContentType->id()]['price'] = self::currency_format($ContentType->field_price->value);
            $products[$ContentType->id()]['image'] = file_create_url($ContentType->field_image_product->entity->getFileUri());
        }

        return $products;
    }

    public static function getProductById($id)
    {
        $nid = \Drupal::entityQuery('node')
            ->condition('type', 'product')
            ->condition('nid', $id)
            ->pager(self::$paginator)
            ->execute();
        $ContentTypes = Node::loadMultiple($nid);
        $product = [];
        foreach ($ContentTypes as $ContentType) {
            $product['id'] =  $ContentType->id();
            $product['name'] =  $ContentType->getTitle();
            $product['description'] = $ContentType->body->value;
            $product['price'] = self::currency_format($ContentType->field_price->value);
            $product['category_name'] = $ContentType->field_category->entity->getName();
            $product['category_id'] = $ContentType->field_category->target_id;
            if ($ContentType->field_category->entity->parent->entity) {
                $product['parent_category_name'] = $ContentType->field_category->entity->parent->entity->getName();
                $product['parent_category_id'] = $ContentType->field_category->entity->parent->entity->id();
            }
            $images = [];
            foreach ($ContentType->field_image_product as $field_image) {
                $image = file_create_url($field_image->entity->getFileUri());
                array_push($images, $image);
            }
            $product['image'] = $images;
        }
        return $product;
    }

    public static function getCategoryName($category_id)
    {
        $nid = \Drupal::entityQuery('taxonomy_term')
            ->condition('tid', $category_id)
            ->execute();
        $ContentTypes = Term::loadMultiple($nid);
        $category = [];
        foreach ($ContentTypes as $ContentType) {
            $category['name'] = $ContentType->getName();
            $category['id'] = $ContentType->id();
            if ($ContentType->parent->entity) {
                $category['parent_name'] = $ContentType->parent->entity->getName();
                $category['parent_id'] = $ContentType->parent->entity->id();
            }
        }
        return $category;
    }

    public static function getCategories()
    {
        $manager = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
        $level1 = $manager->loadTree('categories', 0, 1, TRUE);
        $level2 = $manager->loadTree('categories', 0, 2, TRUE);
        $categories = [];
        foreach ($level1 as $lv1) {
            $categories[$lv1->id()]['id'] = $lv1->id();
            $categories[$lv1->id()]['name'] = $lv1->getName();

            $resultLevel2 = array();
            foreach ($level2 as $lv2) {
                if (!empty($manager->loadParents($lv2->id()))) {
                    if ($lv1->id() === $lv2->parents['0']) {
                        $resultLevel2[$lv2->id()]['id'] = $lv2->id();
                        $resultLevel2[$lv2->id()]['name'] = $lv2->getName();
                    }
                }
            }
            $categories[$lv1->id()]['level2'] = $resultLevel2;
        }
        return $categories;
    }


    public function currency_format($number, $suffix = '$')
    {
        if (!empty($number)) {
            return  "{$suffix}".number_format($number, 0, ',', '.');
        }
    }
}
