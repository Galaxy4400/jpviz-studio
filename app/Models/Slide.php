<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slide extends Model implements HasMedia
{
	use HasFactory;
	use InteractsWithMedia;


	protected $fillable = [
		'title',
		'description',
		// 'image',
		'link',
	];


	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('image')->singleFile();
	}

}
