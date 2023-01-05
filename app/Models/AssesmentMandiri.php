<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentMandiri extends Model
{
    use HasFactory;
    protected $table = 'assesment_mandiri';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['judul', 'pertanyaan'];

    public function bidang_uji()
    {
        return $this->belongsTo(BidangUji::class, 'bidang_id', 'id');
    }
}
