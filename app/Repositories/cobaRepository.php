<?php

namespace App\Repositories;

use App\Models\coba;
use App\Repositories\BaseRepository;

/**
 * Class cobaRepository
 * @package App\Repositories
 * @version April 27, 2020, 5:44 pm UTC
*/

class cobaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nilai'
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
        return coba::class;
    }
}
