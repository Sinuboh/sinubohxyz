<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
	use HasFactory;

	protected $fillable = [
		'social_name',
		'social_link',
		'display_text',
		'image_path',
	];
}
