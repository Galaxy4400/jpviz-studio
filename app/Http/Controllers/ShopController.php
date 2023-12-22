<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class ShopController extends Controller
{

	public function index(): View|Factory
	{
		$categories = Category::query()
			->with('media')
			->get();

		return view('shop.index')->with(compact('categories'));
	}
	
	
	public function category(Category $category): View|Factory
	{
		$category->load('products.media');

		return view('shop.category', compact('category'));
	}
	
	
	public function product(Product $product): View|Factory
	{
		$product->load('media');

		return view('shop.product')->with(compact('product'));
	}

}
