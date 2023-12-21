<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
	use HasFactory;
	use HasSlug;
	use InteractsWithMedia;


	protected $fillable = [
		'title',
		// 'image',
	];


	public function getSlugOptions(): SlugOptions
	{
		return SlugOptions::create()
			->generateSlugsFrom('title')
			->saveSlugsTo('slug');
	}


	public function getRouteKeyName()
	{
		return 'slug';
	}


	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('gallery');
	}
}
