<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @class App\Models\Media
 *
 *
 * @property string $name
 * @property string $type
 * @property string $file
 */
class Media extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'type',
        'file',
    ];
}