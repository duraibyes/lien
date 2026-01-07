<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = ['user_id'];
    /**
     * Relation with Users table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Relation with states table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }

    /**
     * Relation with company table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCompany()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}

