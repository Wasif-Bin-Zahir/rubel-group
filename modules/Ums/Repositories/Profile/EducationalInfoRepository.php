<?php

namespace Modules\Ums\Repositories\Profile;

use App\Repositories\BaseRepository;

class EducationalInfoRepository extends BaseRepository
{
    /**
     * Set model
     *
     * @return string
     */
    public function model()
    {
        return 'Modules\\Ums\\Entities\\UserEducationalInfo';
    }
}
