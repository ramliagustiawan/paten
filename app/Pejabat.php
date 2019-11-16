<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table = 'pejabat';

    protected $guarded = [];

    public function iumk()
    {
        return $this->belongsTo(Iumk::class);
    }
    public function prosessurat()
    {
        return $this->belongsTo(Prosessurat::class);
    }
}
