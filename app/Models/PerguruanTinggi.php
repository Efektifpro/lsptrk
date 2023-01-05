<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    use HasFactory;
    protected $table = 'perguruan_tinggi';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama'];

    public function pendidikan()
    {
        return $this->hasMany(PendidikanPeserta::class, 'perguruan_tinggi_id', 'id');
    }
}
