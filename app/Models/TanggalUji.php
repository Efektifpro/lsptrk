<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggalUji extends Model
{
    use HasFactory;
    protected $table = 'tanggal_uji';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['tanggal'];

    public function bidang_uji()
    {
        return $this->belongsTo(BidangUji::class, 'bidang_id', 'id');
    }

    public function sesi()
    {
        return $this->hasMany(Sesi::class, 'tanggal_id', 'id');
    }
}
