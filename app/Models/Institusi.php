<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    use HasFactory;

    protected $table = 'institusi';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama'];

    public function tipe()
    {
        return $this->belongsTo('App\Models\TipePeserta');
    }

    public function pekerjaan()
    {
        return $this->hasMany(PekerjaanPeserta::class, 'institusi_id', 'id');
    }

    public function biodata()
    {
        return $this->hasMany(Biodata::class, 'intitusi_id', 'id');
    }
}
