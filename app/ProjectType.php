<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
