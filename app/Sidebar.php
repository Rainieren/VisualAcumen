<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'sidebar_id');
    }
}
