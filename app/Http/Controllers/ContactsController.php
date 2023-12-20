<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class ContactsController extends Controller
{
	public function __invoke(): View|Factory
	{
		return view('pages.contacts');
	}
}
