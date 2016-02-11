<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionTenantOccupation extends Model
{
    protected $table = 'tenant_occupation';
    protected $fillable = ['name'];
    protected $guarded = [];
    protected $hidden = [];
    protected $dates = ['created_at','updated_at'];

    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }
}