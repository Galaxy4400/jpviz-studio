<?php

namespace App\View\Composers;

use App\Menu\Menu;
use App\Menu\MenuItem;
use Illuminate\View\View;


class NavigationComposer
{
	public function compose(View $view): void
	{
		$menuLeft = Menu::make()
			->add(MenuItem::make('Projects', route('projects')))
			->add(MenuItem::make('About', route('about')))
			->add(MenuItem::make('Shop', route('shop')));
			
		$menuRight = Menu::make()
			->add(MenuItem::make('Visualization', route('visualization')))
			->add(MenuItem::make('Design', route('design')))
			->add(MenuItem::make('Contact', route('contacts')));

		$view->with(compact('menuLeft', 'menuRight'));
	}
}
