<?php

namespace App\Models;
use App\Models\statistikToko;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function statistikToko()
    {
        return $this ->hasMany(statistikToko::class);
    }
}
