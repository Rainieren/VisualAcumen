<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /*
     *
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /*
     *
     */
    public function sidebar()
    {
        return $this->belongsTo(Sidebar::class);
    }
}
