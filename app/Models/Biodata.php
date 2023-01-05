<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodata';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = [
        'jenkel',
        'temp_lahir',
        'tgl_lahir',
        'kewarganegaraan',
        'alamat',
        'nohp',
        'telp',
        'nip_institusi',
        'pend_terakhir'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class, 'klasifikasi_id', 'id');
    }

    public function institusi()
    {
        return $this->belongsTo(Institusi::class, 'institusi_id', 'id');
    }

}
