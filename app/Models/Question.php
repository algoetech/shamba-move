<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    protected $fillable = [
        'post_id',
        'answer',
        'status',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
