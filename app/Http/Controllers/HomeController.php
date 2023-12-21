<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class HomeController extends Controller
{
	public function __invoke(): View|Factory
	{
		$slides = Slide::all();

		$projects = Project::query()->limit(4)->get();

		$categories = Category::all();

		return view('pages.home')->with(compact('slides', 'projects', 'categories'));
	}
}
