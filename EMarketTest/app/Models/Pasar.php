<?php

namespace App\Models;

use App\Models\Statistik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasar extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function Statistik()
    {
        return $this ->hasMany(Statistik::class);
    }
}
