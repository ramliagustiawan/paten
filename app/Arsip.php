<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    protected $table = 'arsip';

    protected $guarded = [];

    public function suratmasuk()
    {
        return $this->belongsTo(Suratmasuk::class);
    }

}
