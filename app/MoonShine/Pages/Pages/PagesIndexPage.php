<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Pages;

use App\MoonShine\Components\PagesComponent;
use MoonShine\Pages\Crud\IndexPage;


class PagesIndexPage extends IndexPage
{
	protected function mainLayer(): array
	{
		return [
			...$this->actionButtons(),
			PagesComponent::make($this->getResource()),
		];
	}
}
