<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = 'program_studi';

    protected $fillable = ['nama_progran_studi', 'kode_prodi', 'fakultas_id'];

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }
}
