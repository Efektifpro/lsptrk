<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanPeserta extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan_peserta';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['posisi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function institusi()
    {
        return $this->belongsTo(Institusi::class, 'institusi_id', 'id');
    }
}
