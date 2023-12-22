<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class ProjectResource extends ModelResource
{
	protected string $model = Project::class;

	protected string $title = 'Projects';

	public function fields(): array
	{
		return [
			Block::make([
				ID::make()->sortable(),
				Text::make('Название', 'title'),
				MediaLibrary::make('Изображение', 'gallery')->multiple()->removable(),
				// TinyMce::make('Контент', 'content'),
			]),
		];
	}

	public function rules(Model $item): array
	{
		return [];
	}
}
