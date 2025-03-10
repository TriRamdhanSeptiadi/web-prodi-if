<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangTeknikInformatika extends Model
{
    use HasFactory;

    protected $table = 'tentang_teknik_informatikas';
    protected $fillable = [
        'thumbnail',
        'deskripsi'
    ];
}
