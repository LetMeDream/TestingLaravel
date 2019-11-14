<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /* protected Fillable = ['name', 'known']; */

    protected $guarded = [];

    // Let's just create some scopes in here.
    public function scopeKnown($query){

        return $query->where('known', 1);

    }

    public function scopeUnknown($query){

        return $query->where('known', 0);

    }
}
