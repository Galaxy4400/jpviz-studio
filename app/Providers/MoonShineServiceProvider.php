<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
	protected function resources(): array
	{
		return [];
	}

	protected function pages(): array
	{
		return [];
	}

	protected function menu(): array
	{
		return [
			MenuGroup::make(static fn () => __('moonshine::ui.resource.system'), [
				MenuItem::make(
					static fn () => __('moonshine::ui.resource.admins_title'),
					new MoonShineUserResource()
				),
				MenuItem::make(
					static fn () => __('moonshine::ui.resource.role_title'),
					new MoonShineUserRoleResource()
				),
			]),

			MenuItem::make('Documentation', 'https://moonshine-laravel.com')
				->badge(fn () => 'Check'),
		];
	}

	/**
	 * @return array{css: string, colors: array, darkColors: array}
	 */
	protected function theme(): array
	{
		return [
			'colors' => [
				'primary' => '#2288ed',
				'secondary' => '#e7505a',
				'success-bg' => '#1AA244',
			],
			'darkColors' => [
				'primary' => '#1175dd',
				'secondary' => '#d4222e',
				'success-bg' => '#21a926',
			]
		];
	}


	public function boot(): void
	{
		parent::boot();

		moonShineAssets()->add([
			'assets/css/admin.css',
		]);
	}
}
