<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeratModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'berat_pribadi';
    protected $fillable = [
        'tanggal',
        'max',
        'min',
        'perbedaan',
    ];
}
