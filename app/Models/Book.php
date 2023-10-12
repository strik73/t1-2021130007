<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //mengganti primary key yg di deteksi laravel dari 'id' ke 'isbn'
    protected $primaryKey = 'isbn';
    //agar isbn bisa ke show, karena eloquent ngedetect sebagai auto increment PKnya
    public $incrementing = false;
    protected $fillable = [
        'isbn',
        'judul',
        'halaman',
        'kategori',
        'penerbit',
        'published_at',
    ];
}
