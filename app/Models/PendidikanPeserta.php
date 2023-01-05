<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanPeserta extends Model
{
    use HasFactory;

    protected $table = 'pendidikan_peserta';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['strats', 'jurusan'];

    public function perguruan_tinggi()
    {
        return $this->belongsTo(PerguruanTinggi::class, 'perguruan_tinggi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
