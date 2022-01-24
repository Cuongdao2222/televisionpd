<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class post
 * @package App\Models
 * @version November 29, 2021, 1:14 pm UTC
 *
 * @property string $image
 * @property string $title
 * @property string $content
 */
class post extends Model
{

    public $table = 'posts';
    



    public $fillable = [
        'image',
        'title',
        'content',
        'link',
        'category',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title' => 'string',
        'link'  => 'string',
        'category' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|max:10000|mimes:jpg,jpeg,png',
        'title' =>  'required|max:4096',
        'content' =>  'required',

    ];
    
     public static $rulesUpdate = [
        'image' => 'max:10000|mimes:jpg,jpeg,png',
        'title' =>  'required|max:4096',
        'content' =>  'required',

    ];

    
}
