<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan';

    protected $fillable = ['nama_perpustakaan', 'kode_perpustakaan'];

    public function buku(){
        return $this->hasMany(Buku::class);
    }
}
