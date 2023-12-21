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
		$slides = Slide::query()->with('media')->get();

		$projects = Project::query()->with('media')->limit(4)->get();

		$categories = Category::all();

		return view('pages.home')->with(compact('slides', 'projects', 'categories'));
	}
}
