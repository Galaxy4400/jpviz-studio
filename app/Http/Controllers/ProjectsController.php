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
	
	
	public function project(Project $project): View|Factory
	{
		$project->load('media');

		return view('projects.details', compact('project'));
	}
}
