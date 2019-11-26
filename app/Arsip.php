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

    // fungsi mengubah format tanggal
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('d M Y H:i');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }
    public function gettglarsipAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tglarsip'])
        ->format('d M Y');
    }
}
