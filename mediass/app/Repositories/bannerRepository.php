<?php

namespace App\Repositories;

use App\Models\banner;
use App\Repositories\BaseRepository;

/**
 * Class bannerRepository
 * @package App\Repositories
 * @version December 1, 2021, 7:02 am UTC
*/

class bannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'banner_image'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return banner::class;
    }
}
