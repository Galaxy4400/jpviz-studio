<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class ShopController extends Controller
{
	public function __invoke(): View|Factory
	{
		return view('pages.shop');
	}
}
