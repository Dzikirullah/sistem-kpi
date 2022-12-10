<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;
    protected $table = 'data_diri';
    protected $fillable = [
        'nama', 'alamat', 'skor','skor2','skor3'
    ];
}
