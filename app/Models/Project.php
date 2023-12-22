<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
	use HasFactory;
	use HasSlug;
	use InteractsWithMedia;


	protected $fillable = [
		'title',
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


	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('gallery');
	}


	public function registerAllMediaConversions(?Media $media = null): void
	{
		$this->addMediaConversion('thumb')->crop(Manipulations::CROP_CENTER, 530, 450)->nonQueued();
	}
}
