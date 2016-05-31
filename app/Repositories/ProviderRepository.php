<?php

namespace App\Repositories;

use App\Models\Provider;
use InfyOm\Generator\Common\BaseRepository;

class ProviderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Provider::class;
    }
}
