<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $table = 'suratmasuk';

    protected $guarded = [];

   
    public function pejabat()
    {
        return $this->belongsTo(Pejabat::class);
    }
}
