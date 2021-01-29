<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /*
     *  Al that we can see
     * */
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'link'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}
