<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'daftar';

    protected $guarded = [];

    public function getCover()
    {
        if (substr($this->cover, 0, 5) == "https") {
            return $this->cover;
        }
        if ($this->cover) {
            return asset($this->cover);
        }
        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }

    // public function getTgllhrAttribute()
    // {
    //     \Carbon\Carbon::setLocale('id');
    //     return \Carbon\Carbon::parse($this->attributes['tgllhr'])
    //         ->format(' d F Y ');
    // }

    public function prosessurat()
    {
        return $this->belongsTo(Prosessurat::class);
    }
    public function pejabat()
    {
        return $this->belongsTo(Pejabat::class);
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function scopeIsSelesai($query)
    {
        return $query->where('hasil', null);
    }
}
