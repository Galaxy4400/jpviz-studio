<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Page;
use MoonShine\Fields\ID;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Decorations\Block;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Pages\Crud\DetailPage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\MoonShine\Pages\Pages\PagesIndexPage;
use MoonShine\Fields\Relationships\BelongsTo;
use App\MoonShine\Resources\Abstracts\TreeResource;


class PageResource extends TreeResource
{
	protected string $model = Page::class;

	protected string $title = 'Страницы';

	protected string $column = 'title';

	protected string $sortColumn = 'sorting';

	protected string $treeKey = 'parent_id';

	protected bool $isAsync = true;


	protected function pages(): array
	{
		return [
			PagesIndexPage::make($this->title()),
			FormPage::make(
				$this->getItemID()
					? __('moonshine::ui.edit')
					: __('moonshine::ui.add')
			),
			DetailPage::make(__('moonshine::ui.show')),
		];
	}


	public function fields(): array
	{
		return [
			Block::make([
				ID::make()
					->sortable(),

				Text::make('Название', 'title')
					->sortable(),

				Slug::make('ЧПУ', 'slug')
					->from('title')
					->when(!$this->getItem(), fn ($field) => $field->hint('Если не указывать, то поле будет заполнено автоматически на основе заголовка'))
					->readonly((bool) $this->getItem())
					->hideOnIndex(),

				BelongsTo::make('Родительская страница', 'parent', 'title', new PageResource())
					->valuesQuery(fn (Builder $query) => $query->where('id', '!=', $this->getItemID()))
					->nullable()
					->sortable(),

				TinyMce::make('Контент страницы', 'body')->hideOnIndex(),
			]),
		];
	}


	public function rules(Model $item): array
	{
		return [];
	}


	public function treeKey(): ?string
	{
		return $this->treeKey;
	}


	public function sortKey(): string
	{
		return $this->sortColumn();
	}
}