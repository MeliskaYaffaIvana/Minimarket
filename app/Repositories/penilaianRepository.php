<?php

namespace App\Repositories;

use App\Models\penilaian;
use App\Repositories\BaseRepository;

/**
 * Class penilaianRepository
 * @package App\Repositories
 * @version April 27, 2020, 5:40 pm UTC
*/

class penilaianRepository extends BaseRepository
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
        return penilaian::class;
    }
}
