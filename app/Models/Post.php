<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\AssignThisVariablePass;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'post_category_id',
        'content',
        'image',
        'is_published'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->allowDuplicateSlugs()
            ->preventOverwrite();
    }

    public function post_category(){
        return $this->belongsTo(PostCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->hasMany(Question::class);
    }
}