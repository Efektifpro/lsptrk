<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUji extends Model
{
    use HasFactory;
    protected $table = 'bidang_uji';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama'];

    public function tanggal_uji()
    {
        return $this->hasMany(TanggalUji::class, 'bidang_id', 'id');
    }

    public function assesment_mandiri()
    {
        return $this->hasMany(AssesmentMandiri::class, 'bidang_id', 'id');
    }
}
