<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
	use HasFactory;
	use HasSlug;
	use InteractsWithMedia;

	protected $fillable = [
		'title',
		'slug',
		'description',
		'content',
		'price',
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


	public function registerMediaConversions(?Media $media = null): void
	{
		$this->addMediaConversion('thumb')->crop(Manipulations::CROP_CENTER, 570, 365)->nonQueued();
	}


	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
}
