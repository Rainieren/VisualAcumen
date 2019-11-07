<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name', 'description', 'color', 'code', 'responsible_id', 'projecttype_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /*
     *
     */
    public function projecttype()
    {
        return $this->belongsTo(ProjectType::class);
    }
}
