<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use App\Models\PrimaryCategory;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('item');

            if (!is_null($id)) {
                $itemId = Product::availableItems()->where('products.id', $id)->exists();
                if (!$itemId) {
                    abort(404);
                }
            }

            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $categories = PrimaryCategory::with('secondary')
        ->get();

        $sort = $request->get('sort');
        $pagination = $request->get('pagination');
        $products = Product::availableItems()
        ->selectCategory($request->category ?? '0')
        ->searchKeyword($request->keyword)
        ->sortOrder($request->sort)
        ->paginate($request->pagination ?? '20');

        return view('user.index', compact('products', 'categories', 'sort', 'pagination'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)->sum('quantity');

        // 一旦Maxを9とする
        if ($quantity > 9) {
            $quantity = 9;
        }

        return view('user.show',
        compact('product', 'quantity'));
    }

    public function scopeSelectCategory($query, $categoryId)
    {
        if ($categoryId !== '0') {
            return $query->where('secondary_category_id', $categoryId);
        } else {
            return;
        }
    }
}
