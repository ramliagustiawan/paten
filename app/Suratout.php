<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratout extends Model
{
    protected $table = 'suratkeluar';

    protected $guarded = [];


    public function pejabat()
    {
        return $this->belongsTo(Pejabat::class);
    }

    public function arsip()
    {
        return $this->belongsTo(Arsip::class);
    }

    // tampilgambar
    public function getsurat()
    {
        if (substr($this->fotosurat, 0, 5) == "https") {
            return $this->fotosurat;
        }

        if ($this->fotosurat) {
            return asset($this->fotosurat);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
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

    public function getTglsuratAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['tglsurat'])
            ->format('d F Y');
    }

    public function getTglterimaAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['tglterima'])
            ->format('d F Y');
    }
}
