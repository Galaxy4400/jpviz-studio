<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class ProjectsController extends Controller
{
	public function index(): View|Factory
	{
		$projects = Project::all();

		return view('projects.index')->with(compact('projects'));
	}
	
	
	public function details(Project $project): View|Factory
	{
		return view('projects.details');
	}
}
