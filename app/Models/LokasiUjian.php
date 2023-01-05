<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiUjian extends Model
{
    use HasFactory;
    protected $table = 'lokasi_ujian';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama_lokasi'];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id', 'id');
    }
}
