<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
	use HasFactory;
	use HasSlug;
	use NodeTrait;


	protected $fillable = [
		'title',
		'slug',
		'body',
		'parent_id',
		'sorting',
	];


	public function getSlugOptions(): SlugOptions
	{
		return SlugOptions::create()
			->generateSlugsFrom('title')
			->saveSlugsTo('slug');
	}


	public function getRouteKeyName(): string
	{
		return 'slug';
	}
}
