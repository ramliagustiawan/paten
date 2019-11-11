<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iumk extends Model
{
    protected $table = 'iumk';

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
