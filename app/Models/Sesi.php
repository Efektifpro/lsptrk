<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasFactory;
    protected $table = 'sesi';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['sesi', 'mulai', 'selesai'];

    public function tanggal_uji()
    {
        return $this->belongsTo(TanggalUji::class, 'tanggal_id', 'id');
    }
}
