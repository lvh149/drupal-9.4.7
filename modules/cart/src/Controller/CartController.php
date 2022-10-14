<?php

namespace Drupal\cart\Controller;

use Symfony\Component\HttpFoundation\Request;

use Drupal\Core\Controller\ControllerBase;
use Drupal\cart\Services\CartServices;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends ControllerBase
{
    public $session;

    public function __construct(){
        $this->session = \Drupal::request()->getSession();
    }

    public function index()
    {
        $sessionCart = $this->session->get('cart');
        return [
            '#theme' => 'cart_index',
            '#sessionCart' => $sessionCart,
        ];
    }

    public function addToCart(Request $request){
        $product_id = $request->get('product_id');
        $quantity = $request->get('quantity');

        $product = CartServices::checkProduct($product_id);
        if(!$product){
            return new JsonResponse('error', 400);
        }

        $cart = [
            'product' => $product,
            'quantity' => $quantity,
        ];

        $cart_detail = $this->session->get('cart');
        if(isset($cart_detail[$product_id])){
            $cart_detail[$product_id]['quantity'] += $cart['quantity'];
        }else{
            $cart_detail[$product_id] = $cart;
        }

        $this->session->set('cart', $cart_detail);
        return new JsonResponse($product, 200);
    }

    public function deleteProductCart(Request $request){
        $product_id = $request->get('product_id');

        $cart_detail = $this->session->get('cart');
        unset($cart_detail[$product_id]);
        $this->session->set('cart', $cart_detail);
        return new JsonResponse('success', 200);
    }

    public function updateQuantityCart(Request $request){
        $quantityProduct = $request->get('quantity');

        $cart_detail = $this->session->get('cart');
        foreach($quantityProduct as $product_id => $quantity){
            $cart_detail[$product_id]['quantity'] = $quantity;
        }
        $this->session->set('cart', $cart_detail);
        return new JsonResponse('success', 200);
    }
}