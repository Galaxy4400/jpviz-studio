<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Slide;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Url;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;

class SlideResource extends ModelResource
{
	protected string $model = Slide::class;

	protected string $title = 'Slides';

	protected bool $createInModal = true;

	protected bool $editInModal = true;

	protected bool $detailInModal = true;

	public function fields(): array
	{
		return [
			Block::make([
				ID::make()->sortable(),
				Text::make('Заголовок', 'title'),
				MediaLibrary::make('Слайд', 'image')->removable(),
				Textarea::make('Описание', 'description'),
				Url::make('Ссылка', 'link'),
			]),
		];
	}

	public function rules(Model $item): array
	{
		return [];
	}
}
