<?php

namespace App\Repositories\Kitchen;

use App\Models\Kitchen\Presentation;
use InfyOm\Generator\Common\BaseRepository;

class PresentationRepository extends BaseRepository
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
        return Presentation::class;
    }
}
