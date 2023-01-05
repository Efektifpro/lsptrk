<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama_kota', 'provinsi'];

    public function lokasi()
    {
        return $this->hasMany(LokasiUjian::class, 'kota_id', 'id');
    }
}
