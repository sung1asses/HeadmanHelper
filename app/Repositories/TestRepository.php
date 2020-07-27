<?php

namespace App\Repositories;

use App\Models\Test;
use App\Repositories\BaseRepository;

/**
 * Class TestRepository
 * @package App\Repositories
 * @version July 27, 2020, 9:22 am UTC
*/

class TestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'email',
        'post_type',
        'category'
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
        return Test::class;
    }
}
