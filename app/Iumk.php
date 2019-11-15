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
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
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

    // tampilgambar
    public function getCover()
    {
        if (substr($this->fotoktp, 0, 5) == "https") {
            return $this->fotoktp;
        }

        if ($this->fotoktp) {
            return asset($this->fotoktp);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }

    public function getSku()
    {

        if (substr($this->fotosku, 0, 5) == "https") {
            return $this->fotosku;
        }

        if ($this->fotosku) {
            return asset($this->fotosku);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }

    public function getPbb()
    {

        if (substr($this->fotopbb, 0, 5) == "https") {
            return $this->fotopbb;
        }

        if ($this->fotopbb) {
            return asset($this->fotopbb);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }
    public function getDiri()
    {

        if (substr($this->fotodiri, 0, 5) == "https") {
            return $this->fotodiri;
        }

        if ($this->fotodiri) {
            return asset($this->fotodiri);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }



    public function prosessurat()
    {
        return $this->belongsTo(Prosessurat::class);
    }

    public function scopeIsSelesai($query)
    {
        return $query->where('hasil', null);
    }
}
