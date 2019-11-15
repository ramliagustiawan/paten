<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';

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
