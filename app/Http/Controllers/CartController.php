<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCartRequest;
use App\Models\ProductSku;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $cartItems = $this->cartService->get();
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();
        return view('cart.index', compact('cartItems', 'addresses'));
    }

    public function add(AddCartRequest $request)
    {
        $skuId  = $request->input('sku_id');
        $amount = $request->input('amount');
        $this->cartService->add($skuId, $amount);
        return [];

    }

    public function remove(ProductSku $sku, Request $request)
    {
        $this->cartService->remove($sku->id);

        return [];
    }
}
