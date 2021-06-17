<?php

namespace App\Repositories;

use App\Models\PurchaseDetail;
use App\Repositories\BaseRepository;

/**
 * Class PurchaseDetailRepository
 * @package App\Repositories
 * @version July 3, 2019, 3:43 am UTC
*/

class PurchaseDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'purchase_id',
        'item_id',
        'qty',
        'price',
        'sub_total'
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
        return PurchaseDetail::class;
    }
}
