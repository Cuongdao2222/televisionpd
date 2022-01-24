<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class banner
 * @package App\Models
 * @version December 1, 2021, 7:02 am UTC
 *
 * @property string $banner_image
 */
class banner extends Model
{

    public $table = 'banners';
    



    public $fillable = [
        'banner_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banner_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
